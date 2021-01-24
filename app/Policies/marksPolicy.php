<?php

namespace App\Policies;

use App\Models\marks;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class marksPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any marks.
   *
   * @param  \App\User  $user
   * @return mixed
   */
  public function viewAny(User $user)
  {
    if (!($user->status_id != 2 && $user->role_id == 6))
      return in_array($user->role_id, [
        1, 2, 3, 6, 7
      ]);
  }

  /**
   * Determine whether the user can view the marks.
   *
   * @param  \App\User  $user
   * @param  \App\Models\marks  $marks
   * @return mixed
   */
  public function view(User $user, marks $marks)
  {
    if (in_array($user->role_id, [1, 2, 3, 6]))
      return $marks;
    else if ($marks->studentNo == $user->schoolNo)
      return $marks;
  }

  /**
   * Determine whether the user can view the marks.
   *
   * @param  \App\User  $user
   * @param  \App\Models\marks  $marks
   * @return mixed
   */
  public function appeal(User $user, marks $marks)
  {
    if ($marks->studentNo == $user->schoolNo)
      return $marks;
  }

  /**
   * Determine whether the user can create marks.
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
   * Determine whether the user can update the marks.
   *
   * @param  \App\User  $user
   * @param  \App\Models\marks  $marks
   * @return mixed
   */
  public function update(User $user)
  {
    return in_array($user->role_id, [
      1, 2, 3, 6
    ]);
  }

  /**
   * Determine whether the user can delete the marks.
   *
   * @param  \App\User  $user
   * @param  \App\Models\marks  $marks
   * @return mixed
   */
  public function delete(User $user)
  {
    return in_array($user->role_id, [
      1,
    ]);
  }

  public function generateResults(User $user)
  {
    return in_array($user->role_id, [
      1, 2
    ]);
  }

  /**
   * Determine whether the user can restore the marks.
   *
   * @param  \App\User  $user
   * @param  \App\Models\marks  $marks
   * @return mixed
   */
  public function restore(User $user, marks $marks)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the marks.
   *
   * @param  \App\User  $user
   * @param  \App\Models\marks  $marks
   * @return mixed
   */
  public function forceDelete(User $user, marks $marks)
  {
    //
  }
}
