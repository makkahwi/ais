<?php

namespace App\Policies;

use App\Models\staff;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class staffPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any staff.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return in_array($user->role_id, [
            1, 2, 3, 4
        ]);
    }

    /**
     * Determine whether the user can view the staff.
     *
     * @param  \App\User  $user
     * @param  \App\Models\staff  $staff
     * @return mixed
     */
    public function view(User $user, staff $staff)
    {
        //
    }

    /**
     * Determine whether the user can create staff.
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
     * Determine whether the user can update the staff.
     *
     * @param  \App\User  $user
     * @param  \App\Models\staff  $staff
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->role_id, [
            1, 2, 3, 4
        ]);
    }

    /**
     * Determine whether the user can delete the staff.
     *
     * @param  \App\User  $user
     * @param  \App\Models\staff  $staff
     * @return mixed
     */
    public function delete(User $user)
    {
        return in_array($user->role_id, [
            1,
        ]);
    }

    /**
     * Determine whether the user can restore the staff.
     *
     * @param  \App\User  $user
     * @param  \App\Models\staff  $staff
     * @return mixed
     */
    public function restore(User $user, staff $staff)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the staff.
     *
     * @param  \App\User  $user
     * @param  \App\Models\staff  $staff
     * @return mixed
     */
    public function forceDelete(User $user, staff $staff)
    {
        //
    }
}
