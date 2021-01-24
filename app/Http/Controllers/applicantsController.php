<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatestudentsRequest;
use App\Http\Requests\UpdatestudentsRequest;
use App\Repositories\studentsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Models\sems;
use App\Models\users;
use App\Models\levels;
use App\Models\student;
use App\Models\statuses;
use App\Models\classrooms;

class applicantsController extends AppBaseController
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
    $this->authorize('viewApplicants', student::class);

    $currentSem = sems::with('year')
      ->where('start', '<=', today())
      ->where('end', '>=', today())
      ->first();

    $statuses = statuses::all();
    $levels = Levels::all();
    $classrooms = Classrooms::with('level')->get();

    $applicants = student::with('user', 'classroom')
      ->orderBy('eName', 'asc')
      ->get();

    return view('applicants.index', compact('currentSem', 'statuses', 'levels', 'classrooms', 'applicants'));
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

    return redirect(route('applicants.index'));
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
    $this->authorize('update', student::class);

    $student = student::findOrFail($request->id);

    if (empty($student)) {
      Flash::error('The student was not found<br><br>بيانات الطالب المطلوبة غير موجودة');
      return redirect(route('applicants.index'));
    }

    $student->update($request->all());

    Flash::success('The student was updated successfully<br><br>تم تحديث بيانات الطالب بنجاح');

    return redirect(route('applicants.index'));
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
      return redirect(route('applicants.index'));
    }

    $this->studentsRepository->delete($id);

    Flash::success('The student was deleted successfully<br><br>تم حذف بيانات الطالب بنجاح');

    return redirect(route('applicants.index'));
  }
}
