<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatestudentsRequest;
use App\Http\Requests\UpdatestudentsRequest;
use App\Repositories\studentsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Mail\applicantUpdate;
use Illuminate\Support\Facades\Mail;

use App\Models\student;
use App\Models\users;
use App\Models\contacts;
use App\Models\marks;

use App\Models\statuses;
use App\Models\levels;
use App\Models\sems;
use App\Models\classrooms;
use App\Models\studentsFinancialsDiscounts;

class upgradestudentsController extends AppBaseController
{
    /** @var  studentsRepository */
    private $studentsRepository;

    public function __construct(studentsRepository $studentsRepo)
    {
        $this->studentsRepository = $studentsRepo;
    }

    /**
     * Display a listing of the students.
     *
     * @param Request $request
     *
     * @return Response
     */

    public function index(Request $request)
    {
        $marks = marks::all();
        $statuses = statuses::where('id', '<', 6)->get();
        $classrooms = Classrooms::with('students.user.contact')->where('status_id', '=', 2)->orderBy('level_id', 'desc')->get();
        $classroomss = Classrooms::where('status_id', '=', 2)->orderBy('level_id', 'asc')->get();

        $currentSem = Sems::with('year')
        ->where('sems.start', '<=', today())
        ->where('end', '>=', today())->first();

        $studentsFinancialsDiscounts = studentsFinancialsDiscounts::all();

        return view('upgradestudents.index', compact('statuses', 'classrooms', 'classroomss',
                                            'marks', 'currentSem', 'studentsFinancialsDiscounts'));
    }

    /**
     * Store a newly created students in storage.
     *
     * @param CreatestudentsRequest $request
     *
     * @return Response
     */

    public function store(CreatestudentsRequest $request)
    {
        $this->authorize('create', student::class);

        $input = $request->all();

        $students = $this->studentsRepository->create($input);

        Flash::success('The student was saved successfully<br><br>تم حفظ بيانات الطالب بنجاح');

        return redirect(route('upgradestudents.index'));
    }

    /**
     * Update the specified students in storage.
     *
     * @param int $id
     * @param UpdatestudentsRequest $request
     *
     * @return Response
     */

    public function update(Request $request)
     {
        $this->authorize('update', student::class);

        $status = $request['status'];

        $studentNo = $request['studentNo'];

        $student = users::where('schoolNo', '=', $studentNo);

        if ($status == 2)
            $student->update(['status_id' => $status, 'leaveDate' => NULL, 'role_id' => 7]);
        else
            $student->update(['status_id' => $status, 'leaveDate' => today()]);

        $classroom = $request['classroom'];

        $student = student::where('studentNo', '=', $studentNo);
        
        $student->update(['classroom_id' => $classroom]);

        $newStudentNo = $request['newStudentNo'];

        $users = users::where('schoolNo', '=', $studentNo)
                        ->update(['schoolNo' => $newStudentNo]);

        $student = student::where('studentNo', '=', $studentNo)
                        ->update(['studentNo' => $newStudentNo]);

        $contact = contacts::where('schoolNo', '=', $studentNo)
                        ->update(['schoolNo' => $newStudentNo]);

        $data = ['studentNo' => $newStudentNo];

        $email = users::where('schoolNo', '=', $newStudentNo)->get('email');

        Mail::to($email)->send(new applicantUpdate($data));

        return Response::json($email);
     }

    /**
     * Remove the specified students from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */

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

    public function financialUpdate(Request $request)
    {
        $this->authorize('updateFinancial', student::class);

        $financial = $request['financial'];

        $studentNo = $request['studentNo'];

        $student = student::where('studentNo', '=', $studentNo);
        
        $student->update(['financial' => $financial]);

        if ($student->wasChanged())
            $done = 1;
        else
            $done = 0;

        return Response::json($done);
    }

    public function classroomUpdate(Request $request)
    {
        $this->authorize('upgradeStudents', student::class);

        $classroom = $request['classroom'];

        $studentNo = $request['studentNo'];

        $student = student::where('studentNo', '=', $studentNo);
        
        $student->update(['classroom_id' => $classroom]);

        if ($student->wasChanged())
            $done = 1;
        else
            $done = 0;

        return Response::json($done);
    }

    public function statusUpdate(Request $request)
    {
        $this->authorize('upgradeStudents', student::class);

        $status = $request['status'];

        $studentNo = $request['studentNo'];

        $student = users::where('schoolNo', '=', $studentNo);

        if ($status == 2)
            $student->update(['status_id' => $status, 'leaveDate' => NULL, 'role_id' => 7]);
        else
            $student->update(['status_id' => $status, 'leaveDate' => today()]);

        if ($student->wasChanged())
            $done = 1;
        else
            $done = 0;

        return Response::json($done);
    }

    public function sponsorUpdate(Request $request)
    {
        $this->authorize('updateFinancial', student::class);

        $sponsor = $request['sponsor'];

        $studentNo = $request['studentNo'];

        $student = student::where('studentNo', '=', $studentNo);
        
        $student->update(['sponsor' => $sponsor]);

        if ($student->wasChanged())
            $done = 1;
        else
            $done = 0;

        return Response::json($done);
    }

    public function tuitionfreqUpdate(Request $request)
    {
        $this->authorize('updateFinancial', student::class);

        $tuitionfreq = $request['tuitionfreq'];

        $studentNo = $request['studentNo'];

        $student = student::where('studentNo', '=', $studentNo);
        
        $student->update(['tuitionfreq' => $tuitionfreq]);

        if ($student->wasChanged())
            $done = 1;
        else
            $done = 0;

        return Response::json($done);
    }
}
