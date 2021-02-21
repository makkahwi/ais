<?php

namespace App\Policies;

use App\Models\studentVisas;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class studentVisasPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any studentVisa.
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
   * Determine whether the user can view the studentVisa.
   *
   * @param  \App\User  $user
   * @param  \App\Models\studentVisa  $studentVisa
   * @return mixed
   */
  public function view(User $user, studentVisa $studentVisa)
  {
    if ($user->schoolNo == $studentVisa->studentVisaNo && $studentVisa->user->status_id == 2)
      return $studentVisa;
    else return in_array($user->role_id, [
      1, 2, 3, 5, 6
    ]);
  }

  /**
   * Determine whether the user can create studentVisa.
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
   * Determine whether the user can update the studentVisa.
   *
   * @param  \App\User  $user
   * @param  \App\Models\studentVisa  $studentVisa
   * @return mixed
   */
  public function update(User $user)
  {
    return in_array($user->role_id, [
      1, 2, 3, 6
    ]);
  }

  /**
   * Determine whether the user can update the studentVisa financial profile.
   *
   * @param  \App\User  $user
   * @return mixed
   */
  public function updateFinancial(User $user)
  {
    return in_array($user->role_id, [
      1, 5
    ]);
  }

  /**
   * Determine whether the user can update the studentVisa financial settlement / blocking from marks.
   *
   * @param  \App\User  $user
   * @return mixed
   */
  public function blockData(User $user)
  {
    return in_array($user->role_id, [
      1, 2
    ]);
  }

  /**
   * Determine whether the user can update the studentVisa.
   *
   * @param  \App\User  $user
   * @param  \App\Models\studentVisa  $studentVisa
   * @return mixed
   */
  public function upgrade(User $user)
  {
    return in_array($user->role_id, [
      1, 2, 3, 5
    ]);
  }

  /**
   * Determine whether the user can delete the studentVisa.
   *
   * @param  \App\User  $user
   * @param  \App\Models\studentVisa  $studentVisa
   * @return mixed
   */
  public function delete(User $user)
  {
    return in_array($user->role_id, [
      1,
    ]);
  }

  /**
   * Determine whether the user can restore the studentVisa.
   *
   * @param  \App\User  $user
   * @param  \App\Models\studentVisa  $studentVisa
   * @return mixed
   */
  public function restore(User $user, studentVisa $studentVisa)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the studentVisa.
   *
   * @param  \App\User  $user
   * @param  \App\Models\studentVisa  $studentVisa
   * @return mixed
   */
  public function forceDelete(User $user, studentVisa $studentVisa)
  {
    //
  }
}
