<?php

namespace App\Policies;

use App\Models\users;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class usersPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any users.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return in_array($user->role_id, [
            1, 2, 3, 4, 6, 7, 8
        ]);
    }

    /**
     * Determine whether the user can view the users.
     *
     * @param  \App\User  $user
     * @param  \App\Models\users  $users
     * @return mixed
     */
    public function view(User $user, users $users)
    {
        //
    }

    /**
     * Determine whether the user can create users.
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
     * Determine whether the user can update the users.
     *
     * @param  \App\User  $user
     * @param  \App\Models\users  $users
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->role_id, [
            1, 2, 3, 4
        ]);
    }

    /**
     * Determine whether the user can delete the users.
     *
     * @param  \App\User  $user
     * @param  \App\Models\users  $users
     * @return mixed
     */
    public function delete(User $user)
    {
        return in_array($user->role_id, [
            1,
        ]);
    }

    /**
     * Determine whether the user can restore the users.
     *
     * @param  \App\User  $user
     * @param  \App\Models\users  $users
     * @return mixed
     */
    public function restore(User $user, users $users)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the users.
     *
     * @param  \App\User  $user
     * @param  \App\Models\users  $users
     * @return mixed
     */
    public function forceDelete(User $user, users $users)
    {
        //
    }
}
