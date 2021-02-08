<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateattendancesRequest;
use App\Http\Requests\UpdateattendancesRequest;
use App\Repositories\attendancesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Notifications\newAttendance;
use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Notification;

use App\Models\sems;
use App\Models\student;
use App\Models\classrooms;
use App\Models\attendances;

class attendancesController extends AppBaseController
{

  use Notifiable;

  private $attendancesRepository;

  public function __construct(attendancesRepository $attendancesRepo)
  {
    $this->attendancesRepository = $attendancesRepo;
  }

  // Index Page //////////////////////

  public function index(Request $request)
  {
    $this->authorize('viewAny', attendances::class);
    
    $currentSem = $this->getCurrentSem();

    $sems = sems::with('year')
      ->get();
    
    $csem = $currentSem['id'];
    
    $classrooms = Classrooms::with('level')
      ->with(['students.user.attendances' => function($q) use ($csem)
      {
        $q->where('sem_id', $csem)
          ->with('sem.year')
          ->with('user');
      }])
      ->where('status_id', 2)
      ->get();

    $students = student::with('user')
      ->get();

    $attendances = attendances::with('sem', 'user')
      ->orderby('date', 'desc')
      ->get();

    $attendancesOld = attendances::with('sem', 'user')
      ->where('date', NULL)
      ->get();

    return view('attendances.index', compact('currentSem', 'sems', 'classrooms', 'students',
                                    'attendances', 'attendancesOld'));
  }

  // Create Data ////////////////////////////////////////////

  public function store(Request $request)
  {
    $this->authorize('create', attendances::class);

    $list = $request['count'];

    $successful = [];

    $failure = [];
    
    for($y=1; $y<=$list; $y++) {
        
      $schoolNo = $request['schoolNo'.$y];
      $atten = $request['atten'.$y];
      $note = $request['note'.$y];

      $attendances = attendances::firstOrCreate(['schoolNo' => $schoolNo, 'date' => $request['date']],
      ['sem_id' => $request['sem_id'], 'attendance' => $atten, 'note' => $note]);

      if($attendances->wasRecentlyCreated){
        array_push($successful, $schoolNo);
      }
      else {
        array_push($failure, $schoolNo);
      }
    }
    
    if(empty($failure)){
      Flash::success('All of students\' attendances entered data were saved successfully<br><br>تم حفظ كل بيانات حضور الطلاب المدخلة بنجاح');
    }
    elseif (empty($successful)){
      Flash::error('All of students\' attendances entered data clashes with existed ones<br><br>كل بيانات حضور الطلاب المدخلة تتعارض مع بيانات موجودة بالفعل');
    }
    else {
      Flash::success('Attendance of student(s) '.implode(' & ', $successful).' were saved successfully<br><br>تم حفظ بيانات حضور الطالب / الطلاب '.implode(' و ', $successful).' بنجاح');
      Flash::error('Attendance of student(s) '.implode(' & ', $failure).' data clashes with existed ones<br><br>بيانات حضور الطالب / الطلاب '.implode(' و ', $failure).' المدخلة تتعارض مع بيانات موجودة بالفعل');
    }

    return redirect(route('attendances.index'));
  }

  // Update Data ////////////////////////////////////////////

  public function update(Request $request) // Updating with Modal
  {
    $this->authorize('update', attendances::class);

    $attendance = attendances::findOrFail($request['id']);

    if (empty($attendance)) {
      Flash::error('The attendance was not found<br><br>بيانات الامتحان المطلوبة غير موجودة');
      return redirect(route('attendances.index'));
    }

    $attendance->update($request->all());

    Flash::success('The attendance was updated successfully<br><br>تم تحديث بيانات الامتحان بنجاح');

    return redirect(route('attendances.index'));
  }

  // Destroy Data ////////////////////////////////////////////

  public function destroy(Request $request)
  {
    $this->authorize('delete', attendances::class);

    $id = $request['id'];
    
    $attendances = $this->attendancesRepository->find($id);

    if (empty($attendances)) {
      Flash::error('The attendance was not found<br><br>بيانات الامتحان المطلوبة غير موجودة');
      return redirect(route('attendances.index'));
    }

    $this->attendancesRepository->delete($id);

    Flash::success('The attendance was deleted successfully<br><br>تم حذف بيانات الامتحان بنجاح');

    return redirect(route('attendances.index'));
  }
}
