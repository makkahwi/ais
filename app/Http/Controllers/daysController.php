<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedaysRequest;
use App\Http\Requests\UpdatedaysRequest;
use App\Repositories\daysRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use Illuminate\Support\Facades\Mail;
use App\Mail\newUser;

use App\Models\days;
use App\Models\sems;
use App\Models\users;

class daysController extends AppBaseController
{
  /** @var  daysRepository */
  private $daysRepository;

  public function __construct(daysRepository $daysRepo)
  {
    $this->daysRepository = $daysRepo;
  }

  public function index(Request $request)
  {
    $this->authorize('viewAny', days::class);
    
    // $users = users::all();

    // foreach ($users as $u)
    //   if($u['email'] == "Afnany98@gmail.com")
    //     if($u['role_id'] == 7)
    //       Mail::to($u['email'])->send(new newUser($u));

    // Flash::success('All Students\' were notified of system launching');
  
    $currentSem = sems::with('year')
      ->where('start', '<=', today())
      ->where('end', '>=', today())
      ->first();

    $days = days::all();

    return view('days.index', compact('days', 'currentSem'));
  }

  public function store(CreatedaysRequest $request)
  {
    $this->authorize('create', days::class);

    $input = $request->all();

    $days = $this->daysRepository->create($input);

    Flash::success('The day was saved successfully<br><br>تم حفظ بيانات اليوم بنجاح');

    return redirect(route('days.index'));
  }

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
