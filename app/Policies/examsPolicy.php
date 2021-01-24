<?php

namespace App\Policies;

use App\Models\exams;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class examsPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any exams.
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
   * Determine whether the user can view the exams.
   *
   * @param  \App\User  $user
   * @param  \App\Models\exams  $exams
   * @return mixed
   */
  public function view(User $user, exams $exams)
  {
    if (in_array($user->role_id, [1, 2, 3, 7]))
      return $exams;
    else if ($user->role_id == 6)
      foreach($exams->course->sches as $sch)
        if ($user->schoolNo == $sch->teacher_id) {
          return $exams;}
  }

  /**
   * Determine whether the user can create exams.
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
   * Determine whether the user can update the exams.
   *
   * @param  \App\User  $user
   * @param  \App\Models\exams  $exams
   * @return mixed
   */
  public function update(User $user)
  {
    return in_array($user->role_id, [
      1, 2, 3
    ]);
  }

  /**
   * Determine whether the user can delete the exams.
   *
   * @param  \App\User  $user
   * @param  \App\Models\exams  $exams
   * @return mixed
   */
  public function delete(User $user)
  {
    return in_array($user->role_id, [
      1,
    ]);
  }

  /**
   * Determine whether the user can restore the exams.
   *
   * @param  \App\User  $user
   * @param  \App\Models\exams  $exams
   * @return mixed
   */
  public function restore(User $user, exams $exams)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the exams.
   *
   * @param  \App\User  $user
   * @param  \App\Models\exams  $exams
   * @return mixed
   */
  public function forceDelete(User $user, exams $exams)
  {
    //
  }
}
