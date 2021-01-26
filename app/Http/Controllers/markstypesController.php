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

use App\Models\sems;
use App\Models\sches;
use App\Models\years;
use App\Models\marks;
use App\Models\levels;
use App\Models\courses;
use App\Models\students;
use App\Models\marksTypes;
use App\Models\classrooms;

class markstypesController extends AppBaseController
{
  /** @var  markstypesRepository */
  private $markstypesRepository;

  public function __construct(markstypesRepository $markstypesRepo)
  {
    $this->markstypesRepository = $markstypesRepo;
  }

  public function store(CreatemarkstypesRequest $request)
  {
    $this->authorize('create', markstypes::class);

    $input = $request->all();

    $title = $request['name1'].' '.$request['name2'].' '.$request['name3'];

    $input += ['title'=>$title];

    $markstypes = $this->markstypesRepository->create($input);

    Flash::success('The mark type was saved successfully تم حفظ بيانات نوع العلامة بنجاح');

    return redirect(route('marks.index'));
  }

  public function update(Request $request) // Updating with Modal
  {
    $this->authorize('update', markstypes::class);

    $mark = markstypes::findOrFail($request->markId);

    if (empty($mark)) {
      Flash::error('The mark was not found بيانات العلامة المطلوبة غير موجودة');
      return redirect(route('marks.index'));
    }

    $mark->update($request->all());

    Flash::success('The mark was updated successfully تم تحديث بيانات العلامة بنجاح');

    return redirect(route('marks.index'));
  }

  public function destroy(Request $request)
  {
    $this->authorize('delete', markstypes::class);

    $id = $request['id'];
    
    $markstypes = $this->markstypesRepository->find($id);

    if (empty($markstypes)) {
      Flash::error('The mark category was not found بيانات العلامة المطلوبة غير موجودة');
      return redirect(route('marks.index'));
    }

    $this->markstypesRepository->delete($id);

    Flash::success('The mark category was deleted successfully تم حذف بيانات العلامة بنجاح');

    return redirect(route('marks.index'));
  }
}
