<?php

namespace App\Policies;

use App\Models\sches;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class schesPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any sches.
   *
   * @param  \App\User  $user
   * @return mixed
   */
  public function viewAny(User $user)
  {
    if ($user->status_id == 2)
      return in_array($user->role_id, [
        1, 2, 3, 4, 6, 7
      ]);
  }

  /**
   * Determine whether the user can view the sches.
   *
   * @param  \App\User  $user
   * @param  \App\Models\sches  $sches
   * @return mixed
   */
  public function view(User $user, sches $sches)
  {
    if (in_array($user->role_id, [1, 2, 3]))
      return $sches;
    else if ($user->role_id == 6 && ($user->schoolNo == $sches->teacher_id || $user->schoolNo == $sches->classroom->supervisor_id))
      return $sches;
    else if ($user->role_id == 7 && $user->student->classroom_id == $sches->classroom_id)
      return $sches;
  }

  /**
   * Determine whether the user can create sches.
   *
   * @param  \App\User  $user
   * @return mixed
   */
  public function create(User $user)
  {
    return in_array($user->role_id, [
      1, 2, 3, 6
    ]);
  }

  /**
   * Determine whether the user can update the sches.
   *
   * @param  \App\User  $user
   * @param  \App\Models\sches  $sches
   * @return mixed
   */
  public function update(User $user)
  {
    return in_array($user->role_id, [
      1, 2, 3, 6
    ]);
  }

  /**
   * Determine whether the user can delete the sches.
   *
   * @param  \App\User  $user
   * @param  \App\Models\sches  $sches
   * @return mixed
   */
  public function delete(User $user)
  {
    return in_array($user->role_id, [
      1, 2, 3,
    ]);
  }

  /**
   * Determine whether the user can restore the sches.
   *
   * @param  \App\User  $user
   * @param  \App\Models\sches  $sches
   * @return mixed
   */
  public function restore(User $user, sches $sches)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the sches.
   *
   * @param  \App\User  $user
   * @param  \App\Models\sches  $sches
   * @return mixed
   */
  public function forceDelete(User $user, sches $sches)
  {
    //
  }
}
