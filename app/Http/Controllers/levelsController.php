<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatelevelsRequest;
use App\Http\Requests\UpdatelevelsRequest;
use App\Repositories\levelsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Models\levels;

class levelsController extends AppBaseController
{
  /** @var  levelsRepository */
  private $levelsRepository;

  public function __construct(levelsRepository $levelsRepo)
  {
      $this->levelsRepository = $levelsRepo;
  }

  /**
   * Display a listing of the levels.
   *
   * @param Request $request
   *
   * @return Response
   */

  public function index(Request $request)
  {
    $this->authorize('viewAny', levels::class);
    
    $levels = levels::all();

    return view('levels.index',compact('levels'));
  }

  /**
   * Store a newly created levels in storage.
   *
   * @param CreatelevelsRequest $request
   *
   * @return Response
   */

  public function store(CreatelevelsRequest $request)
  {
    $this->authorize('create', levels::class);

    $input = $request->all();
    
    $levels = levels::firstOrCreate(['title' => $input['title']],
    ['description' => $input['description']]);

    if($levels->wasRecentlyCreated){
        Flash::success('The level was saved successfully<br><br>تم حفظ بيانات المستوى الدراسي بنجاح');
    }
    else {
        Flash::error($input["title"].' data already exist<br><br>بيانات المستوى الدراسي موجودة بالفعل');
    }
    
    return redirect(route('levels.index'));
  }

  /**
   * Update the specified levels in storage.
   *
   * @param int $id
   * @param UpdatelevelsRequest $request
   *
   * @return Response
   */

  public function update(Request $request) // Updating with Modal
  {
    $this->authorize('update', levels::class);

    $level = levels::findOrFail($request->level_id);

    if (empty($level)) {
      Flash::error('The level was not found<br><br>بيانات المستوى الدراسي المطلوبة غير موجودة');
      return redirect(route('levels.index'));
    }

    $level->update($request->all());

    Flash::success('The level was updated successfully<br><br>تم تحديث بيانات المستوى الدراسي بنجاح');

    return redirect(route('levels.index'));
  }

  /**
   * Remove the specified levels from storage.
   *
   * @param int $id
   *
   * @throws \Exception
   *
   * @return Response
   */

  public function destroy(Request $request)
  {
    $this->authorize('delete', levels::class);

    $id = $request['id'];
    
    $levels = $this->levelsRepository->find($id);

    if (empty($levels)) {
      Flash::error('The level was not found<br><br>بيانات المستوى الدراسي المطلوبة غير موجودة');
      return redirect(route('levels.index'));
    }

    $this->levelsRepository->delete($id);

    Flash::success('The level was deleted successfully<br><br>تم حذف بيانات المستوى الدراسي بنجاح');

    return redirect(route('levels.index'));
  }
}
