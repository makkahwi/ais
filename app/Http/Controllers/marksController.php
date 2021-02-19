<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreatemarksRequest;
use App\Http\Requests\UpdatemarksRequest;
use App\Repositories\marksRepository;
use Illuminate\Http\Request;
use Response;
use Flash;
use App;

use Illuminate\Support\Facades\Mail;
use App\Mail\markComplain;

use App\Models\sems;
use App\Models\marks;
use App\Models\users;
use App\Models\sches;
use App\Models\levels;
use App\Models\courses;
use App\Models\student;
use App\Models\markstypes;
use App\Models\classrooms;

class marksController extends AppBaseController
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
    
    $editby = date("Y-m-d H:i:s", strtotime('-1 day', strtotime(now())));

    $currentSem = $this->getCurrentSem();

    $levels = levels::all();

    $courses = courses::all();
    
    $csem = $currentSem['id'];

    $classrooms = classrooms::
      with(['level.courses.markstypes' => function($q) use ($csem)
      {
        $q->orderBy('deadline', 'asc')
          ->where('sem_id', $csem)
          ->with('marks.student.user')
          ->with('sem.year');
      }])
      ->get();

    return view('marks.index', compact('editby', 'currentSem', 'classrooms', 'levels', 'courses'));
  }

  public function dynamicStudents(Request $request) // Dynamic Classroom Show ///////////////////////////////////////////
  {
    $classroom_id = $request->get('classroom_id');

    $students = student::with('user')
      ->where('classroom_id', $classroom_id)
      ->get();

    return Response::json($students);
  }

  public function dynamicStudentsByTitle(Request $request) // Dynamic Classroom Show ///////////////////////////////////////////
  {
    $classroom = $request->get('classroom');

    $classroom_id = classrooms::where('title', $classroom)->first();

    $students = student::with('user')
      ->where('classroom_id', $classroom_id['id'])
      ->get();

    return Response::json($students);
  }

  public function dynamicMarkType(Request $request) // Dynamic Mark Show ///////////////////////////////////////////
  {
    $course = $request->get('course_id');

    $type = markstypes::with('sem')->where('course_id', $course)
      ->where('used', 0)
      ->get();

    return Response::json($type);
  }

  public function dynamicMarkTypesUsed(Request $request) // Dynamic Mark Show ///////////////////////////////////////////
  {
    $course = $request->get('course_id');

    $type = markstypes::where('course_id', $course)
      ->get();

    return Response::json($type);
  }

  public function dynamicMarkTypeUsed(Request $request) // Dynamic Mark Show ///////////////////////////////////////////
  {
    $courseName = $request->get('courseName');

    $classroomId = $request->get('classroomId');

    $classroom = classrooms::where('id', $classroomId)
      ->get();

    $level = $classroom->get('level_id');

    $courses = courses::where('level_id', $level)
      ->where('courseName', $courseName);

    $course = $courses->get('id');

    $type = markstypes::where('course_id', $course)
      ->get();

    return Response::json($type);
  }

  public function complain(Request $request)
  {
    $data = $request->all();

    $teacher = users::where('schoolNo', $request['teacher_id'])->get('email');

    Mail::to($teacher)->cc('principal@aqsa.edu.my')->send(new markComplain($data));

    Flash::success('The complain was sent successfully<br><br>تم إرسال الشكوى بنجاح');

    return redirect(route('marks.index'));
  }

  // Create Data ////////////////////////////////////////////

  public function store(Request $request)
  {
    $this->authorize('create', marks::class);

    $list = $request['count'];

    $successful = [];

    $failure = [];
    
    for($y=1; $y<=$list; $y++)
    {
      $studentNo = $request['studentNo'.$y];
      $markValue = $request['markValue'.$y];
      $note = $request['note'.$y];

      $marks = marks::firstOrCreate(['studentNo' => $studentNo, 'type_id' => $request['type_id']],
        ['markValue' => $markValue, 'note' => $note]);

      if($marks->wasRecentlyCreated){
        array_push($successful, $studentNo);
      }
      else {
        array_push($failure, $studentNo);
      }
    }

    markstypes::where('id', $request['type_id'])->update(['used' => true]);

    if(empty($failure)){
      Flash::success('All of Student(s) Marks were saved successfully<br><br>تم حفظ كل بيانات علامات الطلاب بنجاح');
    }
    elseif (empty($successful)){
      Flash::error('All marks data clashes with existed ones<br><br>كل بيانات العلامات المدخلة تتعارض مع بيانات موجودة بالفعل');
    }
    else {
      Flash::success('Marks of Student(s) '.implode(' & ', $successful).' were saved successfully<br><br>تم حفظ بيانات علامات الطالب / الطلاب '.implode(' و ', $successful).' بنجاح');
      Flash::error('Marks of Student(s) '.implode(' & ', $failure).' data clashes with existed ones<br><br>بيانات علامات الطالب / الطلاب '.implode(' و ', $failure).' المدخلة تتعارض مع بيانات موجودة بالفعل');
    }

    return redirect(route('marks.index'));
  }

  // Update Data ////////////////////////////////////////////

  public function update(Request $request) // Updating with Modal
  {
    $this->authorize('update', marks::class);

    $mark = marks::findOrFail($request->mark_id);

    if (empty($mark)) {
      Flash::error('The mark was not found<br><br>بيانات العلامة المطلوبة غير موجودة');
      return redirect(route('marks.index'));
    }

    $mark->update($request->all());

    $marktype = markstypes::find($mark->type_id);

    if ($marktype->title == 'Course Final Result')
    {
      $coursesResults = marks::where('studentNo', $mark->studentNo)
        ->whereHas('type', function($q) use($marktype){
          $q->where('sem_id', $marktype->sem_id)
            ->where('classroom_id', $marktype->classroom_id)
            ->where('title', "Course Final Result")
            ->where('weight', 0);
          })
        ->get("markValue");

      $finalresult = 0;
      $count = 0;

      foreach ($coursesResults as $result)
      {
        $finalresult+= $result->markValue;
        $count++;
      }
      
      $note = $this->grade(number_format($semestertotal, 2));

      $semResults = marks::where('studentNo', $mark->studentNo)
        ->whereHas('type', function($q) use($marktype){
          $q->where('sem_id', $marktype->sem_id)
            ->where('classroom_id', $marktype->classroom_id)
            ->where('title', "Semester Final Result")
            ->where('weight', 0);
          })
        ->update(['markValue' => number_format($finalresult/$count, 2), 'note' => $note]);

      Flash::success('The course final result and semester final result of the student '.$mark->studentNo.' were updated successfully<br><br>تم تحديث بيانات النتيجة النهائية للمادة وللفصل الدراسي للطالب '.$mark->studentNo.' بنجاح');
    }
    else
    {
      Flash::success('The mark was updated successfully<br><br>تم تحديث بيانات العلامة بنجاح');
    }

    return redirect(route('marks.index'));
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

  // Destroy Data ////////////////////////////////////////////

  public function destroy($id)
  {    
    $marks = $this->marksRepository->find($id);

    if (!empty($marks)) {
      $this->marksRepository->delete($id);
    }
  }
}
