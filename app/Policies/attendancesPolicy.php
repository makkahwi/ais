<?php

namespace App\Policies;

use App\User;
use App\Models\attendances;
use Illuminate\Auth\Access\HandlesAuthorization;

class attendancesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any attendances.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return in_array($user->role_id, [
            1, 2, 3, 4, 7
        ]);
    }

    /**
     * Determine whether the user can view the attendances.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Attendances  $attendances
     * @return mixed
     */
    public function view(User $user, Attendances $attendances)
    {
        if (in_array($user->role_id, [1, 2, 3, 4]))
            return $attendances;
        else if ($user->schoolNo == $attendances->schoolNo)
            return $attendances;
    }

    /**
     * Determine whether the user can create attendances.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return in_array($user->role_id, [
            1, 2, 3, 4,
        ]);
    }

    /**
     * Determine whether the user can update the attendances.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Attendances  $attendances
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->role_id, [
            1, 2, 3, 4,
        ]);
    }

    /**
     * Determine whether the user can delete the attendances.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Attendances  $attendances
     * @return mixed
     */
    public function delete(User $user)
    {
        return in_array($user->role_id, [
            1,
        ]);
    }

    /**
     * Determine whether the user can restore the attendances.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Attendances  $attendances
     * @return mixed
     */
    public function restore(User $user, Attendances $attendances)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the attendances.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Attendances  $attendances
     * @return mixed
     */
    public function forceDelete(User $user, Attendances $attendances)
    {
        //
    }
}
