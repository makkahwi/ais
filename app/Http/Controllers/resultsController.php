<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemarksRequest;
use App\Http\Requests\UpdatemarksRequest;
use App\Repositories\marksRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Models\marks;
use App\Models\markstypes;
use App\Models\sches;
use App\Models\results;

use App\Models\sems;
use App\Models\classrooms;
use App\Models\years;
use App\Models\levels;
use App\Models\courses;
use App\Models\student;

use DB;

class resultsController extends AppBaseController
{
    /** @var  marksRepository */
    private $marksRepository;

    public function __construct(marksRepository $marksRepo)
    {
        $this->marksRepository = $marksRepo;
    }

    /**
     * Display a listing of the marks.
     *
     * @param Request $request
     *
     * @return Response
     */

    public function index(Request $request)
    {

        $sems = sems::with('years')->get();
        $classrooms = Classrooms::with('levels')->get();
        $years = Years::all();
        $levels = Levels::all();
        $courses = Courses::all();

        $currentSem = DB::table('sems')->select( // Current Sem Data
            'sems.*',
            'years.*'
        )
        ->join('years', 'years.year_id', '=', 'sems.year_id')
        ->where('sems.start', '<=', today())
        ->where('end', '>=', today())->limit(1)->get();

        $sches = Sches::all();
        
        $students = DB::table('users')->select( 
            'students.*',
            'users.*'
        )
        ->join('students', 'students.studentNo', '=', 'users.schoolNo')
        ->get();

        $semY = DB::table('sems')->select(
            'sems.*',
            'years.*'
        )
        ->join('years', 'years.year_id', '=', 'sems.year_id')
        ->orderBy('sems.created_at', 'DESC')->get();

        $marks = DB::table('marks')->select(
            'markstypes.*',
            'sems.*',
            'classrooms.*',
            'years.*',
            'courses.*',
            'users.*',
            'marks.*'
        )
        ->join('markstypes', 'markstypes.type_id', '=', 'marks.type_id')
        ->join('sems', 'sems.sem_id', '=', 'markstypes.sem_id')
        ->join('classrooms', 'classrooms.classroom_id', '=', 'markstypes.classroom_id')
        ->join('years', 'years.year_id', '=', 'sems.year_id')
        ->join('courses', 'courses.course_id', '=', 'markstypes.course_id')
        ->join('users', 'users.schoolNo', '=', 'marks.studentNo')
        ->orderBy('sems.sem_id', 'DESC')->orderBy('classrooms.classroom_id', 'DESC')
        ->orderBy('courses.course_id', 'DESC')->get();

        return view('results.index', compact('sches', 'marks', 'sems', 'currentSem', 'classrooms',
        'semY', 'levels', 'courses', 'students'));
    }

    public function currentSem(){ // Results Generation ///////////////////////////////////////////

        $currentSem = DB::table('sems')->select(
            'sems.*',
            'years.*'
        )
        ->join('years', 'years.year_id', '=', 'sems.year_id')
        ->where('sems.start', '<=', today())
        ->where('end', '>=', today())->limit(1)->get();

        return Response::json($currentSem);

    }

    public function alllevels(){ // Results Generation ///////////////////////////////////////////

        $levels = Levels::all();

        return Response::json($levels);

    }

    public function activeclassrooms(Request $request){ // Results Generation ///////////////////////////////////////////

        $level_id = $request->get('level_id');

        $classrooms = Classrooms::where('status_id', '=', 2)->where('level_id', '=', $level_id)->get();

        return Response::json($classrooms);

    }

    public function activestudents(Request $request){ // Results Generation ///////////////////////////////////////////

        $classroom_id = $request->get('classroom_id');

        $students = DB::table('students')->select(
            'users.*',
            'students.*'
        )
        ->join('users', 'users.schoolNo', '=', 'students.studentNo')
        ->where('students.status', '=', $classroom_id)->where('users.classroom_id', '=', 2)->get();

        return Response::json($students);

    }

    public function activecourses(Request $request){ // Results Generation ///////////////////////////////////////////

        $level_id = $request->get('level_id');

        $courses = courses::where('status_id', '=', 2)->where('level_id', '=', $level_id)->get();

        return Response::json($courses);

    }

    public function marksntypes(Request $request){ // Results Generation ///////////////////////////////////////////

        $studentNo = $request->get('studentNo');
        $course_id = $request->get('course_id');
        $sem_id = $request->get('sem_id');

        $marks =  DB::table('marks')->select(
            'markstypes.*',
            'marks.*'
        )
        ->join('markstypes', 'markstypes.type_id', '=', 'marks.type_id')
        ->where('marks.studentNo', '=', $studentNo)
        ->where('markstypes.course_id', '=', $course_id)
        ->where('markstypes.sem_id', '=', $sem_id)->get();

        return Response::json($marks);

    }

    /**
     * Store a newly created marks in storage.
     *
     * @param CreatemarksRequest $request
     *
     * @return Response
     */

    public function store(CreatemarksRequest $request)
    {
        $input = $request->all();

        $marks = $this->marksRepository->create($input);

        Flash::success('The results were saved successfully<br><br>تم حفظ النتائج بنجاح');

        return redirect(route('results.index'));
    }

    /**
     * Update the specified marks in storage.
     *
     * @param int $id
     * @param UpdatemarksRequest $request
     *
     * @return Response
     */

    public function update(Request $request) // Updating with Modal
     {
         $mark = marks::findOrFail($request->mark_id);

         if (empty($mark)) {
             Flash::error('The mark was not found<br><br>بيانات العلامة المطلوبة غير موجودة');

             return redirect(route('results.index'));
         }
        
         $mark->update($request->all());

         Flash::success('The mark was updated successfully<br><br>تم تحديث بيانات العلامة بنجاح');

         return redirect(route('results.index'));
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

    public function destroy(Request $request)
    {
        $id = $request['id'];
        
        $marks = $this->marksRepository->find($id);

        if (empty($marks)) {
            Flash::error('The mark was not found<br><br>بيانات العلامة المطلوبة غير موجودة');

            return redirect(route('results.index'));
        }

        $this->marksRepository->delete($id);

        Flash::success('The mark was deleted successfully<br><br>تم حذف بيانات العلامة بنجاح');

        return redirect(route('results.index'));
    }
}
