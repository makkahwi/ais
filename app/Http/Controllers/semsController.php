<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesemsRequest;
use App\Http\Requests\UpdatesemsRequest;
use App\Repositories\semsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Models\sems;
use App\Models\years;

class semsController extends AppBaseController
{
  /** @var  semsRepository */
  private $semsRepository;

  public function __construct(semsRepository $semsRepo)
  {
    $this->semsRepository = $semsRepo;
  }

  public function index(Request $request)
  {
    $this->authorize('viewAny', sems::class);

    $years = Years::orderBy('id', 'DESC')->get();

    $sems = sems::with('year')
      ->orderBy('created_at', 'DESC')
      ->get();

    return view('sems.index', compact('years', 'sems'));
  }

  public function store(CreatesemsRequest $request)
  {
    $this->authorize('create', sems::class);

    $input = $request->all();
    
    $sems = sems::firstOrCreate(['title' => $input['title'], 'year_id' => $input['year_id']],
      ['start' => $input['start'], 'join' => $input['join'],
      'results' => $input['results'], 'end' => $input['end']]);

    if ($sems->wasRecentlyCreated)
    {
      Flash::success('The semester was saved successfully<br><br>تم حفظ بيانات الفصل الدراسي بنجاح');
    }
    else
    {
      Flash::error($input["title"].' data already exist<br><br>بيانات الفصل الدراسي موجودة بالفعل');
    }

    return redirect(route('sems.index'));
  }

  public function update(Request $request) // Updating with Modal
  {
    $this->authorize('update', sems::class);

    $sem = sems::findOrFail($request['id']);

    if (empty($sem))
    {
      Flash::error('The semester was not found<br><br>بيانات الفصل الدراسي المطلوبة غير موجودة');
      return redirect(route('sems.index'));
    }

    $check = sems::with('year')
      ->where('title', '=', $request['title'])
      ->where('year_id', '=', $request['year_id'])->get();

    $sem->update($request->all());
    Flash::success('The semester was updated successfully<br><br>تم تحديث بيانات الفصل الدراسي بنجاح');

    return redirect(route('sems.index'));
  }

  public function destroy(Request $request)
  {
    $this->authorize('delete', sems::class);

    $id = $request['id'];
    
    $sems = $this->semsRepository->find($id);

    if (empty($sems))
    {
      Flash::error('The semester was not found<br><br>بيانات الفصل الدراسي المطلوبة غير موجودة');
      return redirect(route('sems.index'));
    }

    $this->semsRepository->delete($id);

    Flash::success('The semester was deleted successfully<br><br>تم حذف بيانات الفصل الدراسي بنجاح');

    return redirect(route('sems.index'));
  }
}
