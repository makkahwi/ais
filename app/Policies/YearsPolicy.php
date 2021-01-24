<?php

namespace App\Policies;

use App\Models\years;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class YearsPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any years.
   *
   * @param  \App\User  $user
   * @return mixed
   */
  public function viewAny(User $user)
  {
    return in_array($user->role_id, [
      1, 2, 3
    ]);
  }

  /**
   * Determine whether the user can view the years.
   *
   * @param  \App\User  $user
   * @param  \App\Models\years  $years
   * @return mixed
   */
  public function view(User $user)
  {
    return in_array($user->role_id, [
      1, 2, 3
    ]);
  }

  /**
   * Determine whether the user can create years.
   *
   * @param  \App\User  $user
   * @return mixed
   */
  public function create(User $user)
  {
    return in_array($user->role_id, [
      1, 2, 3
    ]);
  }

  /**
   * Determine whether the user can update the years.
   *
   * @param  \App\User  $user
   * @param  \App\Models\years  $years
   * @return mixed
   */
  public function update(User $user)
  {
    return in_array($user->role_id, [
      1, 2, 3
    ]);
  }

  /**
   * Determine whether the user can delete the years.
   *
   * @param  \App\User  $user
   * @param  \App\Models\years  $years
   * @return mixed
   */
  public function delete(User $user)
  {
    return in_array($user->role_id, [
      1
    ]);
  }

  /**
   * Determine whether the user can restore the years.
   *
   * @param  \App\User  $user
   * @param  \App\Models\years  $years
   * @return mixed
   */
  public function restore(User $user)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the years.
   *
   * @param  \App\User  $user
   * @param  \App\Models\years  $years
   * @return mixed
   */
  public function forceDelete(User $user)
  {
    //
  }
}
