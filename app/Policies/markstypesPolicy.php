<?php

namespace App\Policies;

use App\Models\markstypes;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class markstypesPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any markstypes.
   *
   * @param  \App\User  $user
   * @return mixed
   */
  public function viewAny(User $user)
  {
    return in_array($user->role_id, [
      1, 2, 3, 6
    ]);
  }

  /**
   * Determine whether the user can view the markstypes.
   *
   * @param  \App\User  $user
   * @param  \App\Models\markstypes  $markstypes
   * @return mixed
   */
  public function view(User $user, markstypes $markstypes)
  {
    //
  }

  /**
   * Determine whether the user can create markstypes.
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
   * Determine whether the user can update the markstypes.
   *
   * @param  \App\User  $user
   * @param  \App\Models\markstypes  $markstypes
   * @return mixed
   */
  public function update(User $user)
  {
    return in_array($user->role_id, [
      1, 2, 3, 6
    ]);
  }

  /**
   * Determine whether the user can delete the markstypes.
   *
   * @param  \App\User  $user
   * @param  \App\Models\markstypes  $markstypes
   * @return mixed
   */
  public function delete(User $user)
  {
    return in_array($user->role_id, [
      1, 2, 3,
    ]);
  }

  /**
   * Determine whether the user can restore the markstypes.
   *
   * @param  \App\User  $user
   * @param  \App\Models\markstypes  $markstypes
   * @return mixed
   */
  public function restore(User $user, markstypes $markstypes)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the markstypes.
   *
   * @param  \App\User  $user
   * @param  \App\Models\markstypes  $markstypes
   * @return mixed
   */
  public function forceDelete(User $user, markstypes $markstypes)
  {
    //
  }
}
