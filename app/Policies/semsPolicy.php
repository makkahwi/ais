<?php

namespace App\Policies;

use App\Models\sems;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class semsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any sems.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return in_array($user->role_id, [
            1, 2, 3
        ]);
    }

    /**
     * Determine whether the user can view the sems.
     *
     * @param  \App\User  $user
     * @param  \App\Models\sems  $sems
     * @return mixed
     */
    public function view(User $user, sems $sems)
    {
        //
    }

    /**
     * Determine whether the user can create sems.
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
     * Determine whether the user can update the sems.
     *
     * @param  \App\User  $user
     * @param  \App\Models\sems  $sems
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->role_id, [
            1, 2, 3
        ]);
    }

    /**
     * Determine whether the user can delete the sems.
     *
     * @param  \App\User  $user
     * @param  \App\Models\sems  $sems
     * @return mixed
     */
    public function delete(User $user)
    {
        return in_array($user->role_id, [
            1,
        ]);
    }

    /**
     * Determine whether the user can restore the sems.
     *
     * @param  \App\User  $user
     * @param  \App\Models\sems  $sems
     * @return mixed
     */
    public function restore(User $user, sems $sems)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the sems.
     *
     * @param  \App\User  $user
     * @param  \App\Models\sems  $sems
     * @return mixed
     */
    public function forceDelete(User $user, sems $sems)
    {
        //
    }
}
