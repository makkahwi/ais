<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemarkstypesRequest;
use App\Http\Requests\UpdatemarkstypesRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\marksTypesRepository;
use Illuminate\Http\Request;
use Response;
use Flash;

use Illuminate\Support\Facades\Mail;
use App\Mail\markComplain;

use App\Models\sems;
use App\Models\sches;
use App\Models\years;
use App\Models\marks;
use App\Models\levels;
use App\Models\courses;
use App\Models\students;
use App\Models\markstypes;
use App\Models\classrooms;

class markstypesController extends AppBaseController
{
  private $marksTypesRepository;

  public function __construct(marksTypesRepository $markstypesRepo)
  {
    $this->marksTypesRepository = $markstypesRepo;
  }

  // Create Data ////////////////////////////////////////////

  public function store(CreatemarkstypesRequest $request)
  {
    $this->authorize('create', markstypes::class);

    $input = $request->all();

    $title = $request['name1'].' '.$request['name2'].' '.$request['name3'];

    $input += ['title'=>$title];

    $markstypes = $this->marksTypesRepository->create($input);

    Flash::success('The mark type was saved successfully تم حفظ بيانات نوع العلامة بنجاح');

    return redirect(route('marks.index'));
  }

  // Update Data ////////////////////////////////////////////

  public function update(UpdatemarkstypesRequest $request) // Updating with Modal
  {
    $this->authorize('update', markstypes::class);

    $mark = $this->marksTypesRepository->find($request['id']);

    if (empty($mark))
    {
      Flash::error('The mark was not found بيانات العلامة المطلوبة غير موجودة');
      return redirect(route('marks.index'));
    }

    $mark->update($request->all());

    Flash::success('The mark was updated successfully تم تحديث بيانات العلامة بنجاح');

    return redirect(route('marks.index'));
  }

  // Destroy Data ////////////////////////////////////////////

  public function destroy(Request $request)
  {
    $this->authorize('delete', markstypes::class);

    $id = $request['id'];
    
    $markstypes = $this->marksTypesRepository->find($id);

    if (empty($markstypes))
    {
      Flash::error('The mark category was not found بيانات العلامة المطلوبة غير موجودة');
      return redirect(route('marks.index'));
    }

    $marks = marks::where('type_id', $id)
      ->get();

    foreach ($marks as $mark)
    {
      app('App\Http\Controllers\marksController')->destroy($mark->id);
    }

    $this->marksTypesRepository->delete($id);

    Flash::success('The mark category was deleted successfully تم حذف بيانات العلامة بنجاح');

    return redirect(route('marks.index'));
  }
}
