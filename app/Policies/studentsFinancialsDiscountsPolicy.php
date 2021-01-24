<?php

namespace App\Policies;

use App\User;
use App\Models\studentsFinancialsDiscounts;
use Illuminate\Auth\Access\HandlesAuthorization;

class studentsFinancialsDiscountsPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any students financials discounts.
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
   * Determine whether the user can view the students financials discounts.
   *
   * @param  \App\User  $user
   * @param  \App\studentsFinancialsDiscounts  $studentsFinancialsDiscounts
   * @return mixed
   */
  public function view(User $user, studentsFinancialsDiscounts $studentsFinancialsDiscounts)
  {
    return in_array($user->role_id, [
      1, 2, 3, 5,
    ]);
  }

  /**
   * Determine whether the user can create students financials discounts.
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
   * Determine whether the user can update the students financials discounts.
   *
   * @param  \App\User  $user
   * @param  \App\studentsFinancialsDiscounts  $studentsFinancialsDiscounts
   * @return mixed
   */
  public function update(User $user)
  {
    return in_array($user->role_id, [
      1, 2, 3, 5,
    ]);
  }

  /**
   * Determine whether the user can delete the students financials discounts.
   *
   * @param  \App\User  $user
   * @param  \App\studentsFinancialsDiscounts  $studentsFinancialsDiscounts
   * @return mixed
   */
  public function delete(User $user)
  {
    return in_array($user->role_id, [
      1,
    ]);
  }

  /**
   * Determine whether the user can restore the students financials discounts.
   *
   * @param  \App\User  $user
   * @param  \App\studentsFinancialsDiscounts  $studentsFinancialsDiscounts
   * @return mixed
   */
  public function restore(User $user, studentsFinancialsDiscounts $studentsFinancialsDiscounts)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the students financials discounts.
   *
   * @param  \App\User  $user
   * @param  \App\studentsFinancialsDiscounts  $studentsFinancialsDiscounts
   * @return mixed
   */
  public function forceDelete(User $user, studentsFinancialsDiscounts $studentsFinancialsDiscounts)
  {
    //
  }
}
