<?php

namespace App\Policies;

use App\Models\relatives;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class relativesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any relatives.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return in_array($user->role_id, [
            1, 2, 3, 4, 5
        ]);
    }

    /**
     * Determine whether the user can view the relatives.
     *
     * @param  \App\User  $user
     * @param  \App\Models\relatives  $relatives
     * @return mixed
     */
    public function view(User $user, relatives $relatives)
    {
        //
    }

    /**
     * Determine whether the user can create relatives.
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
     * Determine whether the user can update the relatives.
     *
     * @param  \App\User  $user
     * @param  \App\Models\relatives  $relatives
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->role_id, [
            1, 2, 3, 4
        ]);
    }

    /**
     * Determine whether the user can delete the relatives.
     *
     * @param  \App\User  $user
     * @param  \App\Models\relatives  $relatives
     * @return mixed
     */
    public function delete(User $user)
    {
        return in_array($user->role_id, [
            1,
        ]);
    }

    /**
     * Determine whether the user can restore the relatives.
     *
     * @param  \App\User  $user
     * @param  \App\Models\relatives  $relatives
     * @return mixed
     */
    public function restore(User $user, relatives $relatives)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the relatives.
     *
     * @param  \App\User  $user
     * @param  \App\Models\relatives  $relatives
     * @return mixed
     */
    public function forceDelete(User $user, relatives $relatives)
    {
        //
    }
}
