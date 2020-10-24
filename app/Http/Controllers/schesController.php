<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateschesRequest;
use App\Http\Requests\UpdateschesRequest;
use App\Repositories\schesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Models\sches;
use App\Models\sems;
use App\Models\years;
use App\Models\levels;
use App\Models\classrooms;
use App\Models\courses;
use App\Models\staff;
use App\Models\days;
use App\Models\times;
use App\Models\statuses;

use App\Models\student;

class schesController extends AppBaseController
{
    /** @var  schesRepository */
    private $schesRepository;

    public function __construct(schesRepository $schesRepo)
    {
        $this->schesRepository = $schesRepo;
    }

    /**
     * Display a listing of the sches.
     *
     * @param Request $request
     *
     * @return Response
     */
    
    public function index(Request $request)
    {

        $sems = sems::with('year')
        ->orderBy('created_at', 'DESC')
        ->get();

        $courses = Courses::with('level')->get();

        $staff = staff::with('user')
        ->orderBy('eName', 'asc')
        ->get();

        $days = Days::all();
        $times = Times::all();
        $statuses = statuses::orderBy('id', 'DESC')->get();

        $levels = levels::all();

        $classrooms = classrooms::with('level', 'sches')
        ->where('status_id', '=', 2)
        ->get();

        $currentSem = sems::with('year')
        ->where('start', '<=', today())
        ->where('end', '>=', today())->limit(1)->get();

        $csem = $currentSem->get('sem_id');

        $cnSem = sems::with('year')
        ->where('end', '>=', today())->get();

        $nextSem = sems::with('year')
        ->where('start', '>', today())->limit(1)->get();

        $nsem = $nextSem->get('sem_id');

        $sches = sches::with('classroom', 'course', 'teacher')
        ->where('status_id', '=', 2)
        ->where('sem_id', '=', $csem)
        ->get();
        
        $schesOld = sches::with('classroom', 'course', 'teacher')
        ->where('status_id', '=', 2)
        ->where('sem_id', '!=', $csem)
        ->where('sem_id', '!=', $nsem)
        ->get();

        $schesNext = sches::with('classroom', 'course', 'teacher')
        ->where('status_id', '=', 2)
        ->where('sem_id', '=', $nsem)
        ->get(); 

        $schesDe = sches::with('course', 'teacher', 'sem', 'classroom', 'day','time', 'status')
        ->where('status_id', '=', 1)
        ->get();

        return view('sches.index', compact('currentSem', 'nextSem', 'statuses', 'days',
                                            'sches', 'schesNext', 'schesOld', 'schesDe',
                                            'sems', 'levels', 'cnSem', 'times', 'csem',
                                            'classrooms', 'courses', 'staff'));
    }

    public function dynamicClassroom(Request $request){ // Dynamic Classroom Show ///////////////////////////////////////////

        $level_id = $request->get('level_id');

        $classroom = Classrooms::where('level_id', '=', $level_id)->where('status_id', '=', 2)->get();

        return Response::json($classroom);
    }

    public function dynamicCourse(Request $request){ // Dynamic Course Show ///////////////////////////////////////////

        $level_id = $request->get('level_id');

        $course = Courses::where('level_id', '=', $level_id)->where('status_id', '=', 2)->get();

        return Response::json($course);
    }

    public function getClass(Request $request){ 

        $day_id = $request->get('day_id');

        $time_id = $request->get('time_id');

        $classroom_id = $request->get('classroom_id');

        $class = Sches::where('status_id', '=', 2)
        ->where('day_id', '=', $day_id)->where('time_id', '=', $time_id)
        ->where('classroom_id', '=', $classroom_id)->get();

        return Response::json($class);
    }

    /**
     * Store a newly created sches in storage.
     *
     * @param CreateschesRequest $request
     *
     * @return Response
     */

    public function store(Request $request)
    {
        $this->authorize('create', sches::class);

        $list = $request['list'];

        $successful = [];

        $failure = [];
        
        foreach($list as $y) {
            
            $time_id = $request['time_id'.$y];
            $course_id = $request['course_id'.$y];
            $teacher_id = $request['teacher_id'.$y];

            $sches = sches::firstOrCreate(['sem_id' => $request['sem_id'], 'classroom_id' => $request['classroom_id'],
            'day_id' => $request['day_id'], 'time_id' => $time_id, 'status_id' => $request['status_id']],
            ['course_id' => $course_id, 'teacher_id' => $teacher_id]);
    
            if($sches->wasRecentlyCreated){
                array_push($successful, $time_id);
            }
            else {
                array_push($failure, $time_id);
            }
        }

        if(empty($failure)){
            Flash::success('All Class(es) were saved successfully<br><br>تم حفظ كل بيانات الحصة / الحصص الدراسية بنجاح');
        }
        elseif (empty($successful)){
            Flash::error('All Class(es) data clashes with existed ones<br><br>كل بيانات الحصة / الحصص الدراسية المدخلة تتعارض مع بيانات موجودة بالفعل');
        }
        else {
            Flash::success('Class(es) '.implode(' & ', $successful).' were saved successfully<br><br>تم حفظ بيانات الحصة / الحصص الدراسية '.implode(' و ', $successful).' بنجاح');

            Flash::error('Class(es) '.implode(' & ', $failure).' data clashes with existed ones<br><br>بيانات الحصة / الحصص الدراسية '.implode(' و ', $failure).' المدخلة تتعارض مع بيانات موجودة بالفعل');
        }

        return redirect(route('sches.index'));
    }

    /**
     * Update the specified sches in storage.
     *
     * @param int $id
     * @param UpdateschesRequest $request
     *
     * @return Response
     */

    public function update(Request $request) // Updating with Modal
     {
        $this->authorize('update', sches::class);

        $sch = sches::findOrFail($request->sch_id);

        if (empty($sch)) {
            Flash::error('The schadule was not found<br><br>بيانات الحصة الدراسية المطلوبة غير موجودة');

            return redirect(route('sches.index'));
        }

        $sch->update($request->all());
        Flash::success('The class was updated successfully<br><br>تم تحديث بيانات الحصة الدراسية بنجاح');

        return redirect(route('sches.index'));
     }

    /**
     * Remove the specified sches from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */

    public function destroy(Request $request)
    {
        $this->authorize('delete', sches::class);

        $id = $request['id'];
        
        $sches = $this->schesRepository->find($id);

        if (empty($sches)) {
            Flash::error('The schedule was not found<br><br>بيانات الحصة الدراسية المطلوبة غير موجودة');

            return redirect(route('sches.index'));
        }

        $this->schesRepository->delete($id);

        Flash::success('The schedule was deleted successfully<br><br>تم حذف بيانات الحصة الدراسية بنجاح');

        return redirect(route('sches.index'));
    }
}
