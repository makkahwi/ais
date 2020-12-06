<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemarkstypesRequest;
use App\Http\Requests\UpdatemarkstypesRequest;
use App\Repositories\marksTypesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use Illuminate\Support\Facades\Mail;
use App\Mail\markComplain;

use App\Models\marks;
use App\Models\sems;
use App\Models\years;
use App\Models\levels;
use App\Models\classrooms;
use App\Models\courses;
use App\Models\students;
use App\Models\marksTypes;

use App\Models\sches;



class markstypesController extends AppBaseController
{
    /** @var  markstypesRepository */
    private $markstypesRepository;

    public function __construct(markstypesRepository $markstypesRepo)
    {
        $this->markstypesRepository = $markstypesRepo;
    }

    /**
     * Display a listing of the markstypes.
     *
     * @param Request $request
     *
     * @return Response
     */

     /*

    public function index(Request $request)
    {

        $timestamp = now();

        $today = today();

        $editby = date("Y-m-d H:i:s", strtotime('-1 day', strtotime($timestamp)));

        $sems = sems::all();
        $years = Years::all();
        $levels = Levels::all();
        $classrooms = Classrooms::all();
        $courses = Courses::all();

        $semY = DB::table('sems')->select(
            'sems.*',
            'years.*'
        )
        ->join('years', 'years.yearId', '=', 'sems.yearId')
        ->orderBy('sems.created_at', 'DESC')->get();

        $currentSem = DB::table('sems')->select( // Current Semester Record
            'sems.*',
            'years.*'
        )
        ->join('years', 'years.yearId', '=', 'sems.yearId')
        ->where('sems.startDate', '<=', $today)
        ->where('sems.endDate', '>=', $today)->limit(1)->get();

        $students = DB::table('users')->select( 
            'students.*',
            'users.*'
        )
        ->join('students', 'students.studentNo', '=', 'users.schoolNo')
        ->get();

        $sches = DB::table('sches')->select( 
            'classrooms.*',
            'sches.*'
        )
        ->join('classrooms', 'classrooms.classroomId', '=', 'sches.classroomId')
        ->get();

        $markstypes = DB::table('markstypes')->select( // Current Semester Data
            'markstypes.*',
            'sems.*',
            'years.*',
            'classrooms.*',
            'courses.*'
        )
        ->join('sems', 'sems.semId', '=', 'markstypes.semId')
        ->join('years', 'years.yearId', '=', 'sems.yearId')
        ->join('classrooms', 'classrooms.classroomId', '=', 'markstypes.classroomId')
        ->join('courses', 'courses.courseId', '=', 'markstypes.courseId')
        ->where('markstypes.deleted_at', '=', NULL)
        ->where('startDate', '<=', $today)->where('endDate', '>=', $today)->get();

        $markstypesOld = DB::table('markstypes')->select( // Old Semester Data
            'markstypes.*',
            'sems.*',
            'years.*',
            'classrooms.*',
            'courses.*'
        )
        ->join('sems', 'sems.semId', '=', 'markstypes.semId')
        ->join('years', 'years.yearId', '=', 'sems.yearId')
        ->join('classrooms', 'classrooms.classroomId', '=', 'markstypes.classroomId')
        ->join('courses', 'courses.courseId', '=', 'markstypes.courseId')
        ->where('markstypes.deleted_at', '=', NULL)
        ->where('endDate', '<', $today)->get();

        return view('marks.index', compact('timestamp', 'today', 'editby', 'currentSem', 'sches', 'markstypes', 'markstypesOld', 'sems', 'classrooms', 'semY', 'levels', 'courses', 'students'));
    }

    public function dynamicMarkT(Request $request){ // Dynamic Classroom Show ///////////////////////////////////////////

        $types = $request->get('typeId');

        $type = DB::table('markstypes')->select( 
            'sems.*',
            'years.*',
            'markstypes.*'
        )
        ->join('sems', 'sems.semId', '=', 'markstypes.semId')
        ->join('years', 'years.yearId', '=', 'sems.yearId')
        ->where('typeId', '=', $types)->get();

        return Response::json($type);
        
    }

    /**
     * Store a newly created markstypes in storage.
     *
     * @param CreatemarkstypesRequest $request
     *
     * @return Response
     */

    public function store(CreatemarkstypesRequest $request)
    {
        $input = $request->all();

        $title = $request['name1'].' '.$request['name2'].' '.$request['name3'];

        $input += ['title'=>$title];

        $markstypes = $this->markstypesRepository->create($input);

        Flash::success('The mark type was saved successfully تم حفظ بيانات نوع العلامة بنجاح');

        return redirect(route('marks.index'));
    }

    /**
     * Update the specified markstypes in storage.
     *
     * @param int $id
     * @param UpdatemarkstypesRequest $request
     *
     * @return Response
     */

    public function update(Request $request) // Updating with Modal
     {
         $mark = markstypes::findOrFail($request->markId);

         if (empty($mark)) {
             Flash::error('The mark was not found بيانات العلامة المطلوبة غير موجودة');

             return redirect(route('marks.index'));
         }
        
         $mark->update($request->all());

         Flash::success('The mark was updated successfully تم تحديث بيانات العلامة بنجاح');

         return redirect(route('marks.index'));
     }

    /**
     * Remove the specified marks from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */

    public function destroy($id)
    {
        $markstypes = $this->markstypesRepository->find($id);

        if (empty($markstypes)) {
            Flash::error('The mark was not found بيانات العلامة المطلوبة غير موجودة');

            return redirect(route('marks.index'));
        }

        $this->markstypesRepository->delete($id);

        Flash::success('The mark was deleted successfully تم حذف بيانات العلامة بنجاح');

        return redirect(route('marks.index'));
    }
}
