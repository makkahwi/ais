<?php

namespace App\Policies;

use App\User;
use App\Models\contacts;
use Illuminate\Auth\Access\HandlesAuthorization;

class contactsPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any contacts.
   *
   * @param  \App\User  $user
   * @return mixed
   */
  public function viewAny(User $user)
  {
    return in_array($user->role_id, [
      1, 2, 3, 4, 5, 6
    ]);
  }

  /**
   * Determine whether the user can view the contacts.
   *
   * @param  \App\User  $user
   * @param  \App\Models\contacts  $contacts
   * @return mixed
   */
  public function view(User $user, contacts $contacts)
  {
    //
  }

  /**
   * Determine whether the user can create contacts.
   *
   * @param  \App\User  $user
   * @return mixed
   */
  public function create(User $user)
  {
    return in_array($user->role_id, [
      1,
    ]);
  }

  /**
   * Determine whether the user can update the contacts.
   *
   * @param  \App\User  $user
   * @param  \App\Models\contacts  $contacts
   * @return mixed
   */
  public function update(User $user)
  {
    return in_array($user->role_id, [
      1, 2, 3, 4
    ]);
  }

  /**
   * Determine whether the user can delete the contacts.
   *
   * @param  \App\User  $user
   * @param  \App\Models\contacts  $contacts
   * @return mixed
   */
  public function delete(User $user)
  {
    return in_array($user->role_id, [
      1,
    ]);
  }

  /**
   * Determine whether the user can restore the contacts.
   *
   * @param  \App\User  $user
   * @param  \App\Models\contacts  $contacts
   * @return mixed
   */
  public function restore(User $user, contacts $contacts)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the contacts.
   *
   * @param  \App\User  $user
   * @param  \App\Models\contacts  $contacts
   * @return mixed
   */
  public function forceDelete(User $user, contacts $contacts)
  {
    //
  }
}
