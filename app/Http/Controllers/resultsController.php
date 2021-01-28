<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreatemarksRequest;
use App\Http\Requests\UpdatemarksRequest;
use App\Repositories\marksRepository;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Models\sems;
use App\Models\marks;
use App\Models\levels;
use App\Models\student;
use App\Models\classrooms;
use App\Models\markstypes;

class resultsController extends AppBaseController
{
  private $marksRepository;

  public function __construct(marksRepository $marksRepo)
  {
    $this->marksRepository = $marksRepo;
  }

  // Index Page //////////////////////

  public function index(Request $request)
  {
    $this->authorize('viewAny', marks::class);

    $currentSem = $this->getCurrentSem();

    $sems = sems::with('year')
      ->orderBy('created_at', 'desc')
      ->get();

    $levels = levels::with('courses.markstypes')
      ->get();

    $classrooms = classrooms::with('students.user','students.marks.type')
      ->get();

    // return $classrooms;

    return view('results.index', compact('classrooms', 'currentSem', 'levels', 'sems'));
  }

  public function generate(CreatemarksRequest $request)
  {
    $this->authorize('generate', marks::class);

    $students = student::with('classroom.level')->all();

    $classroom = $request['classroom'];

    $currentSem = $this->getCurrentSem();

    $marks = markstypes::where('sem_id', $currentSem['id']);

    $marks = $this->marksRepository->create($input);

    Flash::success('The results of '.$classroom.' were created successfully<br><br> تم إصدار النتائج للصف الدراسي'.$classroom.' بنجاح');

    return redirect(route('results.index'));
  }

  // Create Data ////////////////////////////////////////////

  public function store(CreatemarksRequest $request)
  {
    $this->authorize('create', marks::class);

    $classroom = $request['classroom'];

    $currentSem = $this->getCurrentSem();

    $marks = markstypes::where('sem_id', $currentSem['id']);

    $marks = $this->marksRepository->create($input);

    Flash::success('The results of '.$classroom.' were created successfully<br><br> تم إصدار النتائج للصف الدراسي'.$classroom.' بنجاح');

    return redirect(route('results.index'));
  }

  // Update Data ////////////////////////////////////////////

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

  // Destroy Data ////////////////////////////////////////////

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
