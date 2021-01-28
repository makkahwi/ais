<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatenotificationsRequest;
use App\Http\Requests\UpdatenotificationsRequest;
use App\Repositories\notificationsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

class notificationsController extends AppBaseController
{
  private $notificationsRepository;

  public function __construct(notificationsRepository $notificationsRepo)
  {
    $this->notificationsRepository = $notificationsRepo;
  }

  // Index Page //////////////////////

  public function index(Request $request)
  {
    $notifications = $this->notificationsRepository->all();

    return view('notifications.index')
      ->with('notifications', $notifications);
  }

  // Create Data ////////////////////////////////////////////

  public function store(CreatenotificationsRequest $request)
  {
    $input = $request->all();

    $notifications = $this->notificationsRepository->create($input);

    Flash::success('notifications saved successfully.');

    return redirect(route('notifications.index'));
  }

  // Update Data ////////////////////////////////////////////

  public function update($id, UpdatenotificationsRequest $request)
  {
    $notifications = $this->notificationsRepository->find($id);

    if (empty($notifications)) {
      Flash::error('notifications not found');
      return redirect(route('notifications.index'));
    }

    $notifications = $this->notificationsRepository->update($request->all(), $id);

    Flash::success('notifications updated successfully.');

    return redirect(route('notifications.index'));
  }

  // Destroy Data ////////////////////////////////////////////

  public function destroy(Request $request)
  {
    $id = $request['id'];
    
    $notifications = $this->notificationsRepository->find($id);

    if (empty($notifications)) {
      Flash::error('notifications not found');
      return redirect(route('notifications.index'));
    }

    $this->notificationsRepository->delete($id);

    Flash::success('notifications deleted successfully.');

    return redirect(route('notifications.index'));
  }
}
