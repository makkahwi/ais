<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatestudentsRequest;
use App\Http\Requests\UpdatestudentsRequest;
use App\Repositories\studentsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Models\students;
use App\Models\marks;

use App\Models\status;
use App\Models\levels;
use App\Models\classrooms;



class updatestudentsController extends AppBaseController
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

        $timestamp = now();

        $today = today();

        $statuses = Status::where('statusId', '<', 6)->get();
        $levels = Levels::all();
        $marks = marks::all();
        $classrooms = Classrooms::where('classStatus', '=', 2)->orderBy('levelId', 'desc')->get();
        $classroomss = Classrooms::where('classStatus', '=', 2)->orderBy('levelId', 'asc')->get();

        $currentSem = DB::table('sems')->select( // Current Sem Data
            'sems.*',
            'years.*'
        )
        ->join('years', 'years.yearId', '=', 'sems.yearId')
        ->where('sems.startDate', '<=', $today)
        ->where('sems.endDate', '>=', $today)->limit(1)->get();

        $students = DB::table('students')->select(
            'levels.*',
            'classrooms.*',
            'users.*',
            'status.*',
            'students.*'
        )
        ->join('levels', 'levels.levelId', '=', 'students.levelId')
        ->join('classrooms', 'classrooms.classroomId', '=', 'students.classroomId')
        ->join('users', 'users.schoolNo', '=', 'students.studentNo')
        ->join('status', 'status.statusId', '=', 'users.status')
        ->where('users.status', '<', 3)->orderBy('students.eName', 'asc')->get();

        return view('updatestudents.index', compact('timestamp', 'today', 'students', 'statuses', 'levels', 'classrooms', 'classroomss', 'marks', 'currentSem'));
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
        $input = $request->all();

        $students = $this->studentsRepository->create($input);

        Flash::success('The student was saved successfully تم حفظ بيانات الطالب بنجاح');

        return redirect(route('updatestudents.index'));
    }

    /**
     * Update the specified students in storage.
     *
     * @param int $id
     * @param UpdatestudentsRequest $request
     *
     * @return Response
     */

    public function update(Request $request) // old updating
     {
         $student = students::findOrFail($request->studentId);

         if (empty($student)) {
             Flash::error('The student was not found بيانات الطالب المطلوبة غير موجودة');

             return redirect(route('students.index'));
         }
        
         $student->update($request->all());

         Flash::success('The student was updated successfully تم تحديث بيانات الطالب بنجاح');

         return redirect(route('students.index'));
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

    public function destroy($id)
    {
        $students = $this->studentsRepository->find($id);

        if (empty($students)) {
            Flash::error('The student was not found بيانات الطالب المطلوبة غير موجودة');

            return redirect(route('updatestudents.index'));
        }

        $this->studentsRepository->delete($id);

        Flash::success('The student was deleted successfully تم حذف بيانات الطالب بنجاح');

        return redirect(route('updatestudents.index'));
    }
}
