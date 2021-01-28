<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateexamsRequest;
use App\Http\Requests\UpdateexamsRequest;
use App\Repositories\examsRepository;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Notifications\newExam;
use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Notification;

use App\Models\sems;
use App\Models\exams;
use App\Models\sches;
use App\Models\years;
use App\Models\levels;
use App\Models\student;
use App\Models\courses;
use App\Models\classrooms;

class examsController extends AppBaseController
{

  use Notifiable;

  private $examsRepository;

  public function __construct(examsRepository $examsRepo)
  {
    $this->examsRepository = $examsRepo;
  }

  // Index Page //////////////////////

  public function index(Request $request)
  {
    $this->authorize('viewAny', exams::class);
    
    $currentSem = $this->getCurrentSem();

    $levels = Levels::with('courses')
      ->get();

    return view('exams.index', compact('currentSem', 'levels'));
  }

  // Create Data ////////////////////////////////////////////

  public function store(Request $request)
  {
    $this->authorize('create', exams::class);

    $list = $request['list'];

    $successful = [];

    $failure = [];

    $count =0;
    
    foreach($list as $y) {
        
      $course_id = $request['course_id'.$y];
      $date = $request['date'.$y];
      if($note = $request['note'.$y]){} else $note = null;

      $exams = exams::firstOrCreate(['sem_id' => $request['sem_id'],
        'course_id' => $request['course_id'.$y],'title' => $request['title']],
        ['level_id' => $request['level_id'], 'date' => $date, 'note' => $note]);

      if($exams->wasRecentlyCreated){
        array_push($successful, ++$count);
      }
      else {
        array_push($failure, ++$count);
      }
    }

    if(empty($failure)){
      Flash::success('All exam(s) were saved successfully<br><br>تم حفظ كل بيانات الامتحانات بنجاح');
    }
    else if (empty($successful)){
      Flash::error('All exam(s) data clashes with existed ones<br><br>كل بيانات الامتحان / الامتحانات الدراسية المدخلة تتعارض مع بيانات موجودة بالفعل');
    }
    else {
      Flash::success('Exam(s) '.implode(' & ', $successful).' were saved successfully<br><br>تم حفظ بيانات الامتحانات '.implode(' و ', $successful).' بنجاح');
      Flash::error('Exam(s) '.implode(' & ', $failure).' data clashes with existed ones<br><br>بيانات الامتحانات '.implode(' و ', $failure).' المدخلة تتعارض مع بيانات موجودة بالفعل');
    }

    return redirect(route('exams.index'));
  }

  // Update Data ////////////////////////////////////////////

  public function update(Request $request) // Updating with Modal
  {
    $this->authorize('update', exams::class);

    $exam = $this->examsRepository->find($request['exam_id']);

    if (empty($exam)) {
      Flash::error('The exam was not found<br><br>بيانات الامتحان المطلوبة غير موجودة');
      return redirect(route('exams.index'));
    }
    
    $exam->update($request->all());

    Flash::success('The exam was updated successfully<br><br>تم تحديث بيانات الامتحان بنجاح');

    return redirect(route('exams.index'));
  }

  // Destroy Data ////////////////////////////////////////////

  public function destroy(Request $request)
  {
    $this->authorize('delete', exams::class);

    $id = $request['id'];
    
    $exams = $this->examsRepository->find($id);

    if (empty($exams)) {
      Flash::error('The exam was not found<br><br>بيانات الامتحان المطلوبة غير موجودة');
      return redirect(route('exams.index'));
    }

    $this->examsRepository->delete($id);

    Flash::success('The exam was deleted successfully<br><br>تم حذف بيانات الامتحان بنجاح');

    return redirect(route('exams.index'));
  }
}
