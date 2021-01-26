<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateyearsRequest;
use App\Http\Requests\UpdateyearsRequest;
use App\Repositories\yearsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Models\years;

class yearsController extends AppBaseController
{
  /** @var  yearsRepository */
  private $yearsRepository;

  public function __construct(yearsRepository $yearsRepo)
  {
    $this->yearsRepository = $yearsRepo;
  }

  public function index(Request $request)
  {
    $this->authorize('viewAny', years::class);

    $years = years::orderBy('created_at', 'DESC')->get();

    return view('years.index', compact('years'));
  }

  public function store(CreateyearsRequest $request)
  {
    $this->authorize('create', years::class);

    $input = $request->all();
    
    $years = years::firstOrCreate(['title' => $input['title']]);

    if($years->wasRecentlyCreated){
      Flash::success('The year was saved successfully<br><br>تم حفظ بيانات العام الدراسي بنجاح');
    }
    else {
      Flash::error($input['title'].' year data already exist<br><br>بيانات العام الدراسي موجودة بالفعل');
    }

    return redirect(route('years.index'));
  }

  public function update(Request $request) // old updating
  {
    $this->authorize('update', years::class);

    $year = years::findOrFail($request['id']);

    if (empty($year)) {
      Flash::error('The year was not found<br><br>بيانات العام الدراسي المطلوبة غير موجودة');
      return redirect(route('years.index'));
    }
    
    $year->update($request->all());

    Flash::success('The year was updated successfully<br><br>تم تحديث بيانات العام الدراسي بنجاح');

    return redirect(route('years.index'));
  }

  public function destroy(Request $request)
  {
    $this->authorize('delete', years::class);

    $id = $request['id'];
    
    $years = $this->yearsRepository->find($id);

    if (empty($years)) {
      Flash::error('The year was not found<br><br>بيانات العام الدراسي المطلوبة غير موجودة');
      return redirect(route('years.index'));
    }

    $this->yearsRepository->delete($id);

    Flash::success('The year was deleted successfully<br><br>تم حذف بيانات العام الدراسي بنجاح');

    return redirect(route('years.index'));
  }
}