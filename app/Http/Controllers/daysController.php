<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedaysRequest;
use App\Http\Requests\UpdatedaysRequest;
use App\Repositories\daysRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Models\sems;
use App\Models\days;

class daysController extends AppBaseController
{
    /** @var  daysRepository */
    private $daysRepository;

    public function __construct(daysRepository $daysRepo)
    {
        $this->daysRepository = $daysRepo;
    }

    /**
     * Display a listing of the days.
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

        $days = days::all();

        return view('days.index', compact('days', 'currentSem'));
    }

    /**
     * Store a newly created days in storage.
     *
     * @param CreatedaysRequest $request
     *
     * @return Response
     */

    public function store(CreatedaysRequest $request)
    {
        $this->authorize('create', days::class);

        $input = $request->all();

        $days = $this->daysRepository->create($input);

        Flash::success('The day was saved successfully<br><br>تم حفظ بيانات اليوم بنجاح');

        return redirect(route('days.index'));
    }

    /**
     * Update the specified days in storage.
     *
     * @param int $id
     * @param UpdatedaysRequest $request
     *
     * @return Response
     */

    public function update(Request $request) // Updating with Modal
     {
        $this->authorize('update', days::class);

        $day = Days::findOrFail($request->day_id);

        if (empty($day)) {
            Flash::error('The day was not found<br><br>بيانات اليوم المطلوبة غير موجودة');

            return redirect(route('days.index'));
        }
    
        $day->update($request->all());

        Flash::success('The day was updated successfully<br><br>تم تحديث بيانات اليوم بنجاح');

        return redirect(route('days.index'));
     }

    /**
     * Remove the specified days from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */

    public function destroy(Request $request)
    {
        $this->authorize('delete', days::class);

        $id = $request['id'];
        
        $days = $this->daysRepository->find($id);

        if (empty($days)) {
            Flash::error('The day was not found<br><br>بيانات اليوم المطلوبة غير موجودة');

            return redirect(route('days.index'));
        }

        $this->daysRepository->delete($id);

        Flash::success('The day was deleted successfully<br><br>تم حذف بيانات اليوم بنجاح');

        return redirect(route('days.index'));
    }
}
