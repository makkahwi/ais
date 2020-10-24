<?php

namespace App\Policies;

use App\Models\times;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class timesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any times.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return in_array($user->role_id, [
            1,
        ]);
    }

    /**
     * Determine whether the user can view the times.
     *
     * @param  \App\User  $user
     * @param  \App\Models\times  $times
     * @return mixed
     */
    public function view(User $user, times $times)
    {
        //
    }

    /**
     * Determine whether the user can create times.
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
     * Determine whether the user can update the times.
     *
     * @param  \App\User  $user
     * @param  \App\Models\times  $times
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->role_id, [
            1,
        ]);
    }

    /**
     * Determine whether the user can delete the times.
     *
     * @param  \App\User  $user
     * @param  \App\Models\times  $times
     * @return mixed
     */
    public function delete(User $user)
    {
        return in_array($user->role_id, [
            1,
        ]);
    }

    /**
     * Determine whether the user can restore the times.
     *
     * @param  \App\User  $user
     * @param  \App\Models\times  $times
     * @return mixed
     */
    public function restore(User $user, times $times)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the times.
     *
     * @param  \App\User  $user
     * @param  \App\Models\times  $times
     * @return mixed
     */
    public function forceDelete(User $user, times $times)
    {
        //
    }
}
