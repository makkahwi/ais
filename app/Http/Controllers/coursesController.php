<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreatecoursesRequest;
use App\Http\Requests\UpdatecoursesRequest;
use App\Repositories\coursesRepository;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Models\sems;
use App\Models\sches;
use App\Models\levels;
use App\Models\courses;
use App\Models\student;
use App\Models\statuses;
use App\Models\classrooms;

class coursesController extends AppBaseController
{
  private $coursesRepository;

  public function __construct(coursesRepository $coursesRepo)
  {
    $this->coursesRepository = $coursesRepo;
  }

  // Index Page //////////////////////

  public function index(Request $request)
  {
    $this->authorize('viewAny', courses::class);
    
    $currentSem = $this->getCurrentSem();

    $levels = levels::with('courses')
      ->get();
      
    $statuses = statuses::where('id', '<', 3)
      ->orderBy('id', 'DESC')
      ->get();

    return view('courses.index', compact('currentSem', 'levels', 'statuses'));
  }

  // Create Data ////////////////////////////////////////////

  public function store(CreatecoursesRequest $request)
  {
    $this->authorize('create', courses::class);

    $input = $request->all();
    
    $courses = courses::firstOrCreate(['code' => $input['code']],
      ['title' => $input['title'], 'textbook' => $input['textbook'],
      'level_id' => $input['level_id'], 'description' => $input['description'],
      'status_id' => $input['status_id']]);

    if($courses->wasRecentlyCreated){
      Flash::success('The course was saved successfully<br><br>تم حفظ بيانات المادة الدراسية بنجاح');
    }
    else {
      Flash::error($input["code"].' data already exist<br><br>بيانات المادة الدراسية موجودة بالفعل');
    }

    return redirect(route('courses.index'));
  }

  // Update Data ////////////////////////////////////////////

  public function update(Request $request) // Updating with Modal
  {
    $this->authorize('update', courses::class);

    $course = $this->coursesRepository->find($request['id']);

    if (empty($course)) {
      Flash::error('The course was not found<br><br>بيانات المادة الدراسية المطلوبة غير موجودة');
      return redirect(route('courses.index'));
    }
    
    $course->update($request->all());

    Flash::success('The course was updated successfully<br><br>تم تحديث بيانات المادة الدراسية بنجاح');

    return redirect(route('courses.index'));
  }

  // Destroy Data ////////////////////////////////////////////

  public function destroy(Request $request)
  {
    $this->authorize('delete', courses::class);

    $id = $request['id'];
    
    $courses = $this->coursesRepository->find($id);

    if (empty($courses)) {
      Flash::error('The course was not found<br><br>بيانات المادة الدراسية المطلوبة غير موجودة');
      return redirect(route('courses.index'));
    }

    $this->coursesRepository->delete($id);

    Flash::success('The course was deleted successfully<br><br>تم حذف بيانات المادة الدراسية بنجاح');

    return redirect(route('courses.index'));
  }
}
