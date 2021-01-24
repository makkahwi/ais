<?php

namespace App\Policies;

use App\User;
use App\Models\batches;
use Illuminate\Auth\Access\HandlesAuthorization;

class batchesPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any batches.
   *
   * @param  \App\User  $user
   * @return mixed
   */
  public function viewAny(User $user)
  {
    return in_array($user->role_id, [
      1, 2, 3, 5,
    ]);
  }

  /**
   * Determine whether the user can view the batches.
   *
   * @param  \App\User  $user
   * @param  \App\Models\batches  $batches
   * @return mixed
   */
  public function view(User $user, batches $batches)
  {
    return in_array($user->role_id, [
      1, 2, 3, 5,
    ]);
  }

  /**
   * Determine whether the user can create batches.
   *
   * @param  \App\User  $user
   * @return mixed
   */
  public function create(User $user)
  {
    return in_array($user->role_id, [
      1, 2, 3, 5,
    ]);
  }

  /**
   * Determine whether the user can update the batches.
   *
   * @param  \App\User  $user
   * @param  \App\Models\batches  $batches
   * @return mixed
   */
  public function update(User $user, batches $batches)
  {
    return in_array($user->role_id, [
      1, 2, 3, 5,
    ]);
  }

  /**
   * Determine whether the user can delete the batches.
   *
   * @param  \App\User  $user
   * @param  \App\Models\batches  $batches
   * @return mixed
   */
  public function delete(User $user, batches $batches)
  {
    return in_array($user->role_id, [
      1,
    ]);
  }

  /**
   * Determine whether the user can restore the batches.
   *
   * @param  \App\User  $user
   * @param  \App\Models\batches  $batches
   * @return mixed
   */
  public function restore(User $user, batches $batches)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the batches.
   *
   * @param  \App\User  $user
   * @param  \App\Models\batches  $batches
   * @return mixed
   */
  public function forceDelete(User $user, batches $batches)
  {
    //
  }
}
