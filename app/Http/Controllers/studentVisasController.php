<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatestudentVisasRequest;
use App\Http\Requests\UpdatestudentVisasRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\studentVisasRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Response;
use Flash;
use App;
use PDF;

use App\Models\sems;
use App\Models\users;
use App\Models\sches;
use App\Models\levels;
use App\Models\student;
use App\Models\contacts;
use App\Models\statuses;
use App\Models\relatives;
use App\Models\referances;
use App\Models\classrooms;
use App\Models\studentVisas;

class studentVisasController extends AppBaseController
{
  private $studentVisasRepository;

  public function __construct(studentVisasRepository $studentVisasRepo)
  {
    $this->studentVisasRepository = $studentVisasRepo;
  }

  // Index Page //////////////////////

  public function index(Request $request)
  {
    $this->authorize('viewAny', studentVisas::class);

    $currentSem = $this->getCurrentSem();
    
    $studentVisas = studentVisas::all();
    
    $students = student::all();

    return view('studentVisas.index', compact('currentSem', 'classrooms', 'studentVisas', 'students'));
  }

  public function confLetter(Request $request) // Student Confermation Letter PDF Generator ////////////////////
  {
    $data = $request->all();
      
    $pdf = PDF::loadView('users.profile.studentConfirmationLetter', $data);

    $path = 'docs/letters/SCL/';

    if (!File::isDirectory($path))
    {
      File::makeDirectory($path);
    }

    $pdf->save($path.$ref['ref'].'.pdf');

    return $pdf->download($student.' - Student Confirmation Letter.pdf');
  }

  // Create Data ////////////////////////////////////////////

  public function store(CreatestudentVisasRequest $request)
  {
    $this->authorize('create', studentVisas::class);

    $input = $request->all();

    $studentVisa = $this->studentVisasRepository->create($input);

    Flash::success('The student visa application was saved successfully<br><br>تم حفظ بيانات طلب فيزا الطالب بنجاح');

    return redirect(route('studentVisas.index'));
  }

  // Update Data ////////////////////////////////////////////

  public function update($id, UpdatestudentVisasRequest $request) // Updating with Modal
  {
    $this->authorize('update', studentVisas::class);

    $studentVisa = $this->studentVisasRepository->find($request['id']);

    if (empty($studentVisa)) {
      Flash::error('The student visa application was not found<br><br>طلب فيزا الطالب المطلوب غير موجود');
      return redirect(route('studentVisas.index'));
    }

    $student = $this->studentVisasRepository->update($request->all(), $request['id']);

    Flash::success('The student visa application was updated successfully<br><br>تم تحديث طلب فيزا الطالب بنجاح');

    return redirect(route('studentVisas.index'));
  }

  // Destroy Data ////////////////////////////////////////////

  public function destroy(Request $request)
  {
    $this->authorize('delete', studentVisas::class);

    $id = $request['id'];
    
    $studentVisa = $this->studentVisasRepository->find($id);

    if (empty($studentVisa)) {
      Flash::error('The student visa application was not found<br><br>طلب فيزا الطالب المطلوب غير موجود');
      return redirect(route('students.index'));
    }

    $this->studentVisasRepository->delete($id);

    Flash::success('The student visa application was deleted successfully<br><br>تم حذف طلب فيزا الطالب بنجاح');

    return redirect(route('studentVisas.index'));
  }
}
