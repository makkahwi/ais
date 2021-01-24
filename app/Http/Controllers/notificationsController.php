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
  /** @var  notificationsRepository */
  private $notificationsRepository;

  public function __construct(notificationsRepository $notificationsRepo)
  {
    $this->notificationsRepository = $notificationsRepo;
  }

  /**
   * Display a listing of the notifications.
   *
   * @param Request $request
   *
   * @return Response
   */
  public function index(Request $request)
  {
    $notifications = $this->notificationsRepository->all();

    return view('notifications.index')
      ->with('notifications', $notifications);
  }

  /**
   * Store a newly created notifications in storage.
   *
   * @param CreatenotificationsRequest $request
   *
   * @return Response
   */
  public function store(CreatenotificationsRequest $request)
  {
    $input = $request->all();

    $notifications = $this->notificationsRepository->create($input);

    Flash::success('notifications saved successfully.');

    return redirect(route('notifications.index'));
  }

  /**
   * Update the specified notifications in storage.
   *
   * @param int $id
   * @param UpdatenotificationsRequest $request
   *
   * @return Response
   */
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

  /**
   * Remove the specified notifications from storage.
   *
   * @param int $id
   *
   * @throws \Exception
   *
   * @return Response
   */
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
