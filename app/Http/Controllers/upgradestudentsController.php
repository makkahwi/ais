<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatestudentsRequest;
use App\Http\Requests\UpdatestudentsRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\studentsRepository;
use Illuminate\Http\Request;
use Response;
use Flash;

use Illuminate\Support\Facades\Mail;
use App\Mail\applicantUpdate;

use App\Models\sems;
use App\Models\users;
use App\Models\marks;
use App\Models\levels;
use App\Models\student;
use App\Models\statuses;
use App\Models\contacts;
use App\Models\classrooms;
use App\Models\studentsFinancialsDiscounts;

class upgradestudentsController extends AppBaseController
{
  private $studentsRepository;

  public function __construct(studentsRepository $studentsRepo)
  {
    $this->studentsRepository = $studentsRepo;
  }

  // Index Page //////////////////////

  public function index(Request $request)
  {
    $this->authorize('viewAny', student::class);

    $marks = marks::all();

    $statuses = statuses::where('id', '<', 6)
      ->get();
      
    $classrooms = classrooms::
      with(['level.courses' => function($q) {
        $q->where('status_id', 2);
      }])
      ->with(['students' => function($q) {
        $q->with('user.contact')
          ->with('gradntedDiscounts');
      }])
      ->where('status_id', 2)
      ->orderBy('level_id', 'desc')
      ->get();

    $classroomss = classrooms::where('status_id', 2)
      ->orderBy('level_id', 'asc')
      ->get();

    $currentSem = $this->getCurrentSem();

    $studentsFinancialsDiscounts = studentsFinancialsDiscounts::all();

    return view('upgradestudents.index', compact('statuses', 'classrooms', 'classroomss',
                                        'marks', 'currentSem', 'studentsFinancialsDiscounts'));
  }

  // Create Data ////////////////////////////////////////////

  public function store(CreatestudentsRequest $request)
  {
    $this->authorize('create', student::class);

    $input = $request->all();

    $students = $this->studentsRepository->create($input);

    Flash::success('The student was saved successfully<br><br>تم حفظ بيانات الطالب بنجاح');

    return redirect(route('upgradestudents.index'));
  }

  // Update Data ////////////////////////////////////////////

  public function update(Request $request)
  {
    $this->authorize('update', student::class);

    $status = $request['status'];

    $studentNo = $request['studentNo'];

    $student = users::where('schoolNo', $studentNo)->first();

    if ($status == 2)
      $student->update(['status_id' => $status, 'leaveDate' => NULL, 'role_id' => 7]);
    else
      $student->update(['status_id' => $status, 'leaveDate' => today()]);

    $classroom = $request['classroom'];

    $student = student::where('studentNo', $studentNo)->first();
    
    $student->update(['classroom_id' => $classroom]);

    $newStudentNo = $request['newStudentNo'];

    $users = users::where('schoolNo', $studentNo)
      ->update(['schoolNo' => $newStudentNo]);

    $student = student::where('studentNo', $studentNo)
      ->update(['studentNo' => $newStudentNo]);

    $contact = contacts::where('schoolNo', $studentNo)
      ->update(['schoolNo' => $newStudentNo]);

    $data = ['studentNo' => $newStudentNo];

    $email = users::where('schoolNo', $newStudentNo)->get('email');

    Mail::to($email)->send(new applicantUpdate($data));

    return Response::json($email);
  }

  // Destroy Data ////////////////////////////////////////////

  public function destroy(Request $request)
  {
    $this->authorize('delete', student::class);

    $id = $request['id'];
    
    $students = $this->studentsRepository->find($id);

    if (empty($students)) {
      Flash::error('The student was not found<br><br>بيانات الطالب المطلوبة غير موجودة');
      return redirect(route('upgradestudents.index'));
    }

    $this->studentsRepository->delete($id);

    Flash::success('The student was deleted successfully<br><br>تم حذف بيانات الطالب بنجاح');

    return redirect(route('upgradestudents.index'));
  }

  // Instant Data Update ////////////////////////////////////////////

  public function financialUpdate(Request $request)
  {
    $financial = $request['financial'];

    $studentNo = $request['studentNo'];

    $student = student::where('studentNo', $studentNo)->first();
    
    $student->update(['financial' => $financial]);

    if ($student->wasChanged())
      $done = true;

    return Response::json($done);
  }

  public function classroomUpdate(Request $request)
  {
    $this->authorize('upgradeStudents', student::class);

    $classroom = $request['classroom'];

    $studentNo = $request['studentNo'];

    $student = student::where('studentNo', $studentNo)->first();
    
    $student->update(['classroom_id' => $classroom]);

    if ($student->wasChanged())
      $done = true;

    return Response::json($done);
  }

  public function statusUpdate(Request $request)
  {
    $this->authorize('upgradeStudents', student::class);

    $status = $request['status'];

    $studentNo = $request['studentNo'];
    
    if ($status == 7)
    $this->issueNewStudentFinancials($studentNo);

    $student = users::where('schoolNo', $studentNo)->first();

    if ($status == 2)
      $student->update(['status_id' => $status, 'leaveDate' => NULL, 'role_id' => 7]);
    else
      $student->update(['status_id' => $status, 'leaveDate' => today()]);

    if ($student->wasChanged())
      $done = true;

    return Response::json($done);
  }

  public function sponsorUpdate(Request $request)
  {
    $this->authorize('updateFinancial', student::class);

    $sponsor = $request['sponsor'];

    $studentNo = $request['studentNo'];

    $student = student::where('studentNo', $studentNo)->first();
    
    $student->update(['sponsor' => $sponsor]);

    if ($student->wasChanged())
      $done = true;

    return Response::json($done);
  }

  public function tuitionfreqUpdate(Request $request)
  {
    $this->authorize('updateFinancial', student::class);

    $tuitionfreq = $request['tuitionfreq'];

    $studentNo = $request['studentNo'];

    $student = student::where('studentNo', $studentNo)->first();
    
    $student->update(['tuitionfreq' => $tuitionfreq]);

    if ($student->wasChanged())
      $done = true;

    return Response::json($done);
  }

  public function gradntedDiscountsUpdate(Request $request)
  {
    $this->authorize('updateFinancial', student::class);

    $gradntedDiscounts = $request['gradntedDiscounts'];

    $studentNo = $request['studentNo'];

    $student = student::where('studentNo', $studentNo)->first();

    if ($student->gradntedDiscounts()->find($gradntedDiscounts))
      $student->gradntedDiscounts()->detach([$gradntedDiscounts]);
    else
      $student->gradntedDiscounts()->attach([$gradntedDiscounts]);

    if ($student->wasChanged())
      $done = true;

    return Response::json($done);
  }

  public function exceptedCoursesUpdate(Request $request)
  {
    $this->authorize('upgradeStudents', student::class);

    $exceptedCourses = $request['exceptedCourses'];

    $studentNo = $request['studentNo'];

    $student = student::where('studentNo', $studentNo)->first();

    if ($student->exceptedCourses()->find($exceptedCourses))
      $student->exceptedCourses()->detach([$exceptedCourses]);
    else
      $student->exceptedCourses()->attach([$exceptedCourses]);

    if ($student->wasChanged())
      $done = true;

    return Response::json($done);
  }
  
  public function issueNewStudentFinancials($studentNo)
  {
    $studentNo;
  }
}
