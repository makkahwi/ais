<?php

namespace App\Policies;

use App\User;
use App\Models\studentsFinancials;
use Illuminate\Auth\Access\HandlesAuthorization;

class studentsFinancialsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any students financials.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return in_array($user->role_id, [
            1, 2, 3, 5, 7, 8
        ]);
    }

    /**
     * Determine whether the user can view the students financials.
     *
     * @param  \App\User  $user
     * @param  \App\studentsFinancials  $studentsFinancials
     * @return mixed
     */
    public function view(User $user, studentsFinancials $studentsFinancials)
    {
        return in_array($user->role_id, [
            1, 2, 3, 5, 7, 8
        ]);
    }

    /**
     * Determine whether the user can create students financials.
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
     * Determine whether the user can update the students financials.
     *
     * @param  \App\User  $user
     * @param  \App\studentsFinancials  $studentsFinancials
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->role_id, [
            1, 2, 3, 5,
        ]);
    }

    /**
     * Determine whether the user can delete the students financials.
     *
     * @param  \App\User  $user
     * @param  \App\studentsFinancials  $studentsFinancials
     * @return mixed
     */
    public function delete(User $user)
    {
        return in_array($user->role_id, [
            1,
        ]);
    }

    /**
     * Determine whether the user can restore the students financials.
     *
     * @param  \App\User  $user
     * @param  \App\studentsFinancials  $studentsFinancials
     * @return mixed
     */
    public function restore(User $user, studentsFinancials $studentsFinancials)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the students financials.
     *
     * @param  \App\User  $user
     * @param  \App\studentsFinancials  $studentsFinancials
     * @return mixed
     */
    public function forceDelete(User $user, studentsFinancials $studentsFinancials)
    {
        //
    }
}
