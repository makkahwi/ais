<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatestatusRequest;
use App\Http\Requests\UpdatestatusRequest;
use App\Repositories\statusRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Models\sems;
use App\Models\statuses;

class statusController extends AppBaseController
{
    /** @var  statusRepository */
    private $statusRepository;

    public function __construct(statusRepository $statusRepo)
    {
        $this->statusRepository = $statusRepo;
    }

    /**
     * Display a listing of the status.
     *
     * @param Request $request
     *
     * @return Response
     */

    public function index(Request $request)
    {

        $currentSem = sems::with('year')
        ->where('start', '<=', today())
        ->where('end', '>=', today())->limit(1)->get();
        
        $statuses = statuses::all();

        return view('statuses.index', compact('statuses', 'currentSem'));
    }

    /**
     * Store a newly created status in storage.
     *
     * @param CreatestatusRequest $request
     *
     * @return Response
     */

    public function store(CreatestatusRequest $request)
    {
        $this->authorize('create', statuses::class);

        $input = $request->all();

        $status = $this->statusRepository->create($input);

        Flash::success('The status was saved successfully<br><br>تم حفظ بيانات الحالة بنجاح');

        return redirect(route('statuses.index'));
    }

    /**
     * Update the specified status in storage.
     *
     * @param int $id
     * @param UpdatestatusRequest $request
     *
     * @return Response
     */

    public function update(Request $request) // Updating with Modal
     {
        $this->authorize('update', statuses::class);

        $status = statuses::findOrFail($request->status_id);

        if (empty($status)) {
            Flash::error('The status was not found<br><br>بيانات الحالة المطلوبة غير موجودة');

            return redirect(route('statuses.index'));
        }
    
        $status->update($request->all());

        Flash::success('The status was updated successfully<br><br>تم تحديث بيانات الحالة بنجاح');

        return redirect(route('statuses.index'));
     }

    /**
     * Remove the specified status from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */

    public function destroy(Request $request)
    {
        $this->authorize('delete', statuses::class);

        $id = $request['id'];
        
        $status = $this->statusRepository->find($id);

        if (empty($status)) {
            Flash::error('The status was not found<br><br>بيانات الحالة المطلوبة غير موجودة');

            return redirect(route('statuses.index'));
        }

        $this->statusRepository->delete($id);

        Flash::success('The status was deleted successfully<br><br>تم حذف بيانات الحالة بنجاح');

        return redirect(route('statuses.index'));
    }
}
