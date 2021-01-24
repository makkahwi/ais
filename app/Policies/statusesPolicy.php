<?php

namespace App\Policies;

use App\Models\statuses;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class statusesPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any statuses.
   *
   * @param  \App\User  $user
   * @return mixed
   */
  public function viewAny(User $user)
  {
    return in_array($user->role_id, [
      1,
    ]);
  }

  /**
   * Determine whether the user can view the statuses.
   *
   * @param  \App\User  $user
   * @param  \App\Models\statuses  $statuses
   * @return mixed
   */
  public function view(User $user, statuses $statuses)
  {
    //
  }

  /**
   * Determine whether the user can create statuses.
   *
   * @param  \App\User  $user
   * @return mixed
   */
  public function create(User $user)
  {
    return in_array($user->role_id, [
      1,
    ]);
  }

  /**
   * Determine whether the user can update the statuses.
   *
   * @param  \App\User  $user
   * @param  \App\Models\statuses  $statuses
   * @return mixed
   */
  public function update(User $user)
  {
    return in_array($user->role_id, [
      1,
    ]);
  }

  /**
   * Determine whether the user can delete the statuses.
   *
   * @param  \App\User  $user
   * @param  \App\Models\statuses  $statuses
   * @return mixed
   */
  public function delete(User $user)
  {
    return in_array($user->role_id, [
      1,
    ]);
  }

  /**
   * Determine whether the user can restore the statuses.
   *
   * @param  \App\User  $user
   * @param  \App\Models\statuses  $statuses
   * @return mixed
   */
  public function restore(User $user, statuses $statuses)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the statuses.
   *
   * @param  \App\User  $user
   * @param  \App\Models\statuses  $statuses
   * @return mixed
   */
  public function forceDelete(User $user, statuses $statuses)
  {
    //
  }
}
