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



class resultsController extends AppBaseController
{
    /** @var  marksRepository */
    private $marksRepository;

    public function __construct(marksRepository $marksRepo)
    {
        $this->marksRepository = $marksRepo;
    }

    /**
     * Display a listing of The Results.
     *
     * @param Request $request
     *
     * @return Response
     */

    public function index(Request $request)
    {

        $students = student::
        with(['classroom.level.courses.markstypes.marks' => function($q) {
            $q->where('studentNo', '=', 19100137);}])
        ->get();

        return $students;

        $editby = date("Y-m-d H:i:s", strtotime('-1 day', strtotime(now())));

        $currentSem = sems::with('year')
        ->where('sems.start', '<=', today())
        ->where('end', '>=', today())
        ->first();

        $levels = levels::all();
        $classrooms = classrooms::with('level.courses.markstypes.marks.student.user', 'level.courses.markstypes.sem.year')->get();
        $courses = courses::all();

        return view('results.index', compact('editby', 'currentSem', 'classrooms', 'levels', 'courses'));
    }

    /**
     * Store a newly created marks in storage.
     *
     * @param CreatemarksRequest $request
     *
     * @return Response
     */

    public function generate(CreatemarksRequest $request)
    {
        $this->authorize('generate', marks::class);

        $students = student::with('classroom.level')->all();

        return $students;

        $classroom = $request['classroom'];

        $currentSem = sems::
        where('start', '<=', today())
        ->where('end', '>=', today())
        ->first();

        $marks = markstypes::where('sem_id', '=', $currentSem['id']);

        $marks = $this->marksRepository->create($input);

        Flash::success('The results of '.$classroom.' were created successfully<br><br> تم إصدار النتائج للصف الدراسي'.$classroom.' بنجاح');

        return redirect(route('results.index'));
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
        $this->authorize('create', marks::class);

        $classroom = $request['classroom'];

        $currentSem = sems::
        where('start', '<=', today())
        ->where('end', '>=', today())
        ->first();

        $marks = markstypes::where('sem_id', '=', $currentSem['id']);

        $marks = $this->marksRepository->create($input);

        Flash::success('The results of '.$classroom.' were created successfully<br><br> تم إصدار النتائج للصف الدراسي'.$classroom.' بنجاح');

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
        $this->authorize('update', marks::class);

        $mark = marks::findOrFail($request->mark_id);

        if (empty($mark)) {
            Flash::error('The Result was not found<br><br>بيانات النتيجة المطلوبة غير موجودة');

            return redirect(route('results.index'));
        }
    
        $mark->update($request->all());

        Flash::success('The Result was updated successfully<br><br>تم تحديث بيانات النتيجة بنجاح');

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
        $this->authorize('delete', marks::class);

        $id = $request['id'];
        
        $marks = $this->marksRepository->find($id);

        if (empty($marks)) {
            Flash::error('The Result was not found<br><br>بيانات النتيجة المطلوبة غير موجودة');

            return redirect(route('results.index'));
        }

        $this->marksRepository->delete($id);

        Flash::success('The Result was deleted successfully<br><br>تم حذف بيانات النتيجة بنجاح');

        return redirect(route('results.index'));
    }
}
