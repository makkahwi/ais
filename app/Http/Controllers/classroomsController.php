<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateclassroomsRequest;
use App\Http\Requests\UpdateclassroomsRequest;
use App\Repositories\classroomsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Models\levels;
use App\Models\classrooms;
use App\Models\student;
use App\Models\staff;
use App\Models\sems;
use App\Models\statuses;

class classroomsController extends AppBaseController
{
    /** @var  classroomsRepository */
    private $classroomsRepository;

    public function __construct(classroomsRepository $classroomsRepo)
    {
        $this->classroomsRepository = $classroomsRepo;
    }

    /**
     * Display a listing of the classrooms.
     *
     * @param Request $request
     *
     * @return Response
     */

    public function index(Request $request)
    {

        $levels = levels::all();
        $statuses = statuses::orderBy('id', 'DESC')->get();
        $staff = staff::with('user')->get();

        $currentSem = sems::with('year')
        ->where('start', '<=', today())
        ->where('end', '>=', today())->limit(1)->get();

        $students = student::with('user')->get();

        $classrooms = classrooms::with('level', 'status', 'supervisor', 'students')
        ->orderBy('status_id', 'desc')
        ->orderBy('level_id', 'asc')
        ->orderBy('title', 'asc')
        ->get();

        return view('classrooms.index', compact('levels', 'statuses', 'staff', 'currentSem',
                                                'students', 'classrooms'));
    }

    public function counter(Request $request)
    {
        $count = student::where('classroom_id', '=', $request->classroom_id)
        ->where('status_id', '=', 2);

        $counter = collect($count)->count();

        return ($counter);
    }

    /**
     * Store a newly created classrooms in storage.
     *
     * @param CreateclassroomsRequest $request
     *
     * @return Response
     */

    public function store(CreateclassroomsRequest $request)
    {
        $this->authorize('create', classrooms::class);

        $input = $request->all();
        
        $classrooms = classrooms::firstOrCreate(['title' => $input['title'],
        'level_id' => $input['level_id']], ['roomNo' => $input['roomNo'],
        'capacity' => $input['capacity'], 'description' => $input['description'],
        'supervisor_id' => $input['supervisor_id'], 'status_id' => $input['status_id']]);

        if($classrooms->wasRecentlyCreated){
            Flash::success('The classroom was saved successfully<br><br>تم حفظ بيانات الشعبة الدراسية بنجاح');
        }
        else {
            Flash::error('The classroom already exist<br><br>بيانات الشعبة الدراسية موجودة بالفعل');
        }

        return redirect(route('classrooms.index'));
    }

    /**
     * Update the specified classrooms in storage.
     *
     * @param int $id
     * @param UpdateclassroomsRequest $request
     *
     * @return Response
     */

    public function update(Request $request) // Updating with Modal
     {
        $this->authorize('update', classrooms::class);

        $classroom = classrooms::findOrFail($request['id']);

        if (empty($classroom)) {
            Flash::error('The classroom was not found<br><br>بيانات الشعبة الدراسية المطلوبة غير موجودة');

            return redirect(route('classrooms.index'));
        }
        
        $check = classrooms::where('title', '=', $request['title'])
        ->where('level_id', '=', $request['level_id'])->get();

        $classroom->update($request->all());
        Flash::success('The classroom was updated successfully<br><br>تم تحديث بيانات الشعبة الدراسية بنجاح');    

        return redirect(route('classrooms.index'));
     }

    /**
     * Remove the specified classrooms from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */

    public function destroy(Request $request)
    {
        $this->authorize('delete', classrooms::class);

        $id = $request['id'];
        
        $classrooms = $this->classroomsRepository->find($id);

        if (empty($classrooms)) {
            Flash::error('The classroom was not found<br><br>بيانات الشعبة الدراسية المطلوبة غير موجودة');

            return redirect(route('classrooms.index'));
        }

        $this->classroomsRepository->delete($id);

        Flash::success('The classroom was deleted successfully<br><br>تم حذف بيانات الشعبة الدراسية بنجاح');

        return redirect(route('classrooms.index'));
    }
}
