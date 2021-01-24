<?php

namespace App\Policies;

use App\Models\levels;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class levelsPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any levels.
   *
   * @param  \App\User  $user
   * @return mixed
   */
  public function viewAny(User $user)
  {
    return in_array($user->role_id, [
      1, 2, 3,
    ]);
  }

  /**
   * Determine whether the user can view the levels.
   *
   * @param  \App\User  $user
   * @param  \App\Models\levels  $levels
   * @return mixed
   */
  public function view(User $user, levels $levels)
  {
    if (in_array($user->role_id, [1, 2, 3]))
      return $levels;
    else if ($user->role_id == 7 && $levels->id == $user->student->classroom->level_id)
      return $levels;
    else if ($user->role_id == 6)
      foreach($levels->classrooms as $classroom)
        if ($user->schoolNo == $classroom->supervisor_id) {
          return $levels;
          break;}
        else
          foreach($classroom->sches as $sch)
            if ($user->schoolNo == $sch->teacher_id) {
              return $levels;
              break;}
  }

  
  public function viewLevels(User $user, levels $levels)
  {
    if (in_array($user->role_id, [1, 2, 3]))
      return $levels;
    else if ($user->role_id == 6) {
      foreach($levels->classrooms as $classroom)
        if ($user->schoolNo == $classroom->supervisor_id) {
          return $levels;
          break;}
    }
  }

  /**
   * Determine whether the user can create levels.
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
   * Determine whether the user can update the levels.
   *
   * @param  \App\User  $user
   * @param  \App\Models\levels  $levels
   * @return mixed
   */
  public function update(User $user)
  {
    return in_array($user->role_id, [
      1, 2, 3,
    ]);
  }

  /**
   * Determine whether the user can delete the levels.
   *
   * @param  \App\User  $user
   * @param  \App\Models\levels  $levels
   * @return mixed
   */
  public function delete(User $user)
  {
    return in_array($user->role_id, [
      1,
    ]);
  }

  /**
   * Determine whether the user can restore the levels.
   *
   * @param  \App\User  $user
   * @param  \App\Models\levels  $levels
   * @return mixed
   */
  public function restore(User $user, levels $levels)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the levels.
   *
   * @param  \App\User  $user
   * @param  \App\Models\levels  $levels
   * @return mixed
   */
  public function forceDelete(User $user, levels $levels)
  {
    //
  }
}
