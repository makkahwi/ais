<?php

namespace App\Policies;

use App\User;
use App\Models\days;
use Illuminate\Auth\Access\HandlesAuthorization;

class daysPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any days.
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
   * Determine whether the user can view the days.
   *
   * @param  \App\User  $user
   * @param  \App\Models\days  $days
   * @return mixed
   */
  public function view(User $user, days $days)
  {
    //
  }

  /**
   * Determine whether the user can create days.
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
   * Determine whether the user can update the days.
   *
   * @param  \App\User  $user
   * @param  \App\Models\days  $days
   * @return mixed
   */
  public function update(User $user)
  {
    return in_array($user->role_id, [
      1,
    ]);
  }

  /**
   * Determine whether the user can delete the days.
   *
   * @param  \App\User  $user
   * @param  \App\Models\days  $days
   * @return mixed
   */
  public function delete(User $user)
  {
    return in_array($user->role_id, [
      1,
    ]);
  }

  /**
   * Determine whether the user can restore the days.
   *
   * @param  \App\User  $user
   * @param  \App\Models\days  $days
   * @return mixed
   */
  public function restore(User $user, days $days)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the days.
   *
   * @param  \App\User  $user
   * @param  \App\Models\days  $days
   * @return mixed
   */
  public function forceDelete(User $user, days $days)
  {
    //
  }
}
