<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetimesRequest;
use App\Http\Requests\UpdatetimesRequest;
use App\Repositories\timesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Models\sems;
use App\Models\times;

class timesController extends AppBaseController
{
  /** @var  timesRepository */
  private $timesRepository;

  public function __construct(timesRepository $timesRepo)
  {
    $this->timesRepository = $timesRepo;
  }

  public function index(Request $request)
  {
    $this->authorize('viewAny', times::class);

    $currentSem = sems::with('year')
      ->where('start', '<=', today())
      ->where('end', '>=', today())->first();

    $times = times::all();

    return view('times.index', compact('times', 'currentSem'));
  }

  public function store(CreatetimesRequest $request)
  {
    $this->authorize('create', times::class);

    $input = $request->all();

    $times = $this->timesRepository->create($input);

    Flash::success('The time was saved successfully<br><br>تم حفظ بيانات وقت الحصة بنجاح');

    return redirect(route('times.index'));
  }

  public function update(Request $request) // Updating with Modal
  {
    $this->authorize('update', times::class);

    $time = times::findOrFail($request->time_id);

    if (empty($time))
    {
      Flash::error('The time was not found<br><br>بيانات وقت الحصة المطلوبة غير موجودة');
      return redirect(route('times.index'));
    }

    $time->update($request->all());

    Flash::success('The time was updated successfully<br><br>تم تحديث بيانات وقت الحصة بنجاح');

    return redirect(route('times.index'));
  }

  public function destroy(Request $request)
  {
    $this->authorize('delete', times::class);

    $id = $request['id'];
    
    $times = $this->timesRepository->find($id);

    if (empty($times))
    {
      Flash::error('The time was not found<br><br>بيانات وقت الحصة المطلوبة غير موجودة');
      return redirect(route('times.index'));
    }

    $this->timesRepository->delete($id);

    Flash::success('The time was deleted successfully<br><br>تم حذف بيانات وقت الحصة بنجاح');

    return redirect(route('times.index'));
  }
}
