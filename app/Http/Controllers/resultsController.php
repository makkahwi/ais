<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreatemarksRequest;
use App\Http\Requests\UpdatemarksRequest;
use App\Repositories\marksRepository;
use Illuminate\Http\Request;
use Response;
use Flash;
use PDF;

use App\Models\sems;
use App\Models\marks;
use App\Models\levels;
use App\Models\student;
use App\Models\classrooms;
use App\Models\markstypes;

class resultsController extends AppBaseController
{
  private $marksRepository;

  public function __construct(marksRepository $marksRepo)
  {
    $this->marksRepository = $marksRepo;
  }

  // Index Page //////////////////////

  public function index(Request $request)
  {
    $this->authorize('viewAny', marks::class);

    $currentSem = $this->getCurrentSem();

    $sems = sems::with('year')
      ->where('start', '<=', today())
      ->orderBy('created_at', 'desc')
      ->get();

    $levels = levels::
      with(['courses' => function($q) {
        $q->where('status_id', 2)
          ->with('markstypes')
        ;}])
      ->get();

    $classrooms = classrooms::with('students.user','students.marks.type')
      ->get();

    return view('results.index', compact('currentSem', 'classrooms', 'levels', 'sems'));
  }

  public function transcript(request $request)
  {
    $sno = $request->sno;
    $sem = $request->sem;
    $semester = $request->semSw;

    $marks = marks::where('studentNo', $sno)
      ->whereHas('type', function($q) use($sem){
        $q->where('sem_id', $sem)
          ->where('weight', 0);
      })
      ->with('type.course')
      ->get();

    $student = student::where('studentNo', $sno)
      ->with('user.contact', 'classroom.level')
      ->first();

    $data = ['marks' => $marks, 'student' => $student, 'semester' => $semester];

    $pdf = PDF::loadView('results.studentTranscript', $data);

    return $pdf->download($sno.' - Student Transcript.pdf');
  }

  // Create Data ////////////////////////////////////////////

  public function store(request $request)
  {
    $this->authorize('create', marks::class);

    $currentSem = $this->getCurrentSem();

    $levels = $request->levels;

    if (!$levels)
    {
      Flash::error('No Levels were selected to generate results for<br><br> لم يتم اختيار اي مراحل دراسية لإصدار النتائج الخاصة بها');
      return redirect(route('results.index'));
    }

    foreach ($levels as $level)
    {
      $lev = levels::where('id', $level)
        ->with('classrooms.students.user')
        ->first();

      foreach($lev->classrooms as $classroom)
      {
        foreach($classroom->students as $student)
        {
          if ($student->user->status_id == 2)
          {
            $studentmarks = collect(
              markstypes::where('sem_id', $currentSem->id)
                ->where('title', '!=', 'Course Final Result')
                ->where('title', '!=', 'Semester Final Result')
                ->where('classroom_id', $classroom->id)
                ->with(['marks' => function($q) use ($student){
                  $q->where('studentNo', $student->studentNo)
                  ->get();
                }])
                ->get()
              )
              ->groupBy('course_id');

            $semestertotal = 0;
            $count = 0;

            foreach ($studentmarks as $coursemarks)
            {

              $coursetotal = 0;
              
              $finaltype = markstypes::firstOrCreate([
                'title' => 'Course Final Result',
                'sem_id' => $currentSem->id,
                'course_id' => $coursemarks[0]->course_id,
                'classroom_id' => $classroom->id,
                'teacher_id' => 161111,
                'max' => 100,
                'weight' => 0,
                'deadline' => $currentSem->results,
                'used' => 1
              ]);
              
              foreach ($coursemarks as $type)
              {
                if(count($type->marks))
                {
                  $coursetotal += $type->marks[0]->markValue / $type->max * $type->weight;
                }
              }

              $note = $this->grade(number_format($coursetotal, 2));
              
              $courseresult = marks::create([
                'type_id' => $finaltype['id'],
                'studentNo' => $student->studentNo,
                'markValue' => number_format($coursetotal, 2),
                'note' => $note
              ]);

              $semestertotal += number_format($coursetotal, 2);
              $count++;
            }

            $finalsem = markstypes::firstOrCreate([
              'title' => 'Semester Final Result',
              'sem_id' => $currentSem->id,
              'course_id' => 0,
              'classroom_id' => $classroom->id,
              'teacher_id' => 161111,
              'max' => 100,
              'weight' => 0,
              'deadline' => $currentSem->results,
              'used' => 1
            ]);

            $semestertotal /= $count;

            $note = $this->grade(number_format($semestertotal, 2));
            
            $semresult = marks::create([
              'type_id' => $finalsem->id,
              'studentNo' => $student->studentNo,
              'markValue' => number_format($semestertotal, 2),
              'note' => $note
            ]);

          }
        }
      }
    }

    Flash::success('The results of selected levels were created successfully<br><br> تم إصدار النتائج للمراحل الدراسية المختارة بنجاح');

    return redirect(route('results.index'));
  }

  public function grade($mark)
  {
    if($mark >= 90)
      return 'Excellent';
    elseif($mark >= 80)
      return 'Very good';
    elseif($mark >= 70)
      return 'Good';
    elseif($mark >= 60)
      return 'Average';
    elseif($mark >= 50)
      return 'Satisfactory';
    elseif($mark >= 0)
      return 'Failed';
    else
      return 'Error';
  }

  // Update Data ////////////////////////////////////////////

  public function update(Request $request) // Updating with Modal
  {
    $this->authorize('update', marks::class);

    $mark = marks::findOrFail($request->mark_id);

    if (empty($mark)) {
      Flash::error('The Result was not found<br><br>بيانات النتيجة المطلوبة غير موجودة');
      return redirect(route('results.index'));
    }

    $mark->update($request->all());

    Flash::success('The Result was updated successfully<br><br>تم تحديث بيانات النتيجة بنجاح');

    return redirect(route('results.index'));
  }

  // Destroy Data ////////////////////////////////////////////

  public function destroy(Request $request)
  {
    $this->authorize('delete', marks::class);

    $id = $request['id'];
    
    $marks = $this->marksRepository->find($id);

    if (empty($marks)) {
      Flash::error('The Result was not found<br><br>بيانات النتيجة المطلوبة غير موجودة');
      return redirect(route('results.index'));
    }

    $this->marksRepository->delete($id);

    Flash::success('The Result was deleted successfully<br><br>تم حذف بيانات النتيجة بنجاح');

    return redirect(route('results.index'));
  }
}
