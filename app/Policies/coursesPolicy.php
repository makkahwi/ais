<?php

namespace App\Policies;

use App\User;
use App\Models\courses;
use Illuminate\Auth\Access\HandlesAuthorization;

class coursesPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any courses.
   *
   * @param  \App\User  $user
   * @return mixed
   */
  public function viewAny(User $user)
  {
    if ($user->status_id == 2)
      return in_array($user->role_id, [
        1, 2, 3, 6, 7
      ]);
  }

  /**
   * Determine whether the user can view the courses.
   *
   * @param  \App\User  $user
   * @param  \App\Models\courses  $courses
   * @return mixed
   */
  public function view(User $user, courses $courses)
  {
    if (in_array($user->role_id, [1, 2, 3]))
      return $courses;
    else if ($user->role_id == 7 && $user->student->classroom->level_id == $courses->level_id)
      return $courses;
    else
      foreach ($courses->sches as $sch)
        if ($user->schoolNo == $sch->teacher_id) {
          return $courses;
          break;}
  }

  /**
   * Determine whether the user can create courses.
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
   * Determine whether the user can update the courses.
   *
   * @param  \App\User  $user
   * @param  \App\Models\courses  $courses
   * @return mixed
   */
  public function update(User $user)
  {
    return in_array($user->role_id, [
      1, 2, 3
    ]);
  }

  /**
   * Determine whether the user can delete the courses.
   *
   * @param  \App\User  $user
   * @param  \App\Models\courses  $courses
   * @return mixed
   */
  public function delete(User $user)
  {
    return in_array($user->role_id, [
      1,
    ]);
  }

  /**
   * Determine whether the user can restore the courses.
   *
   * @param  \App\User  $user
   * @param  \App\Models\courses  $courses
   * @return mixed
   */
  public function restore(User $user, courses $courses)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the courses.
   *
   * @param  \App\User  $user
   * @param  \App\Models\courses  $courses
   * @return mixed
   */
  public function forceDelete(User $user, courses $courses)
  {
    //
  }
}
