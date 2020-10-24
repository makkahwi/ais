<?php

namespace App\Policies;

use App\User;
use App\Models\studentsFinancialsCategories;
use Illuminate\Auth\Access\HandlesAuthorization;

class studentsFinancialsCategoriesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any students financials categories.
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
     * Determine whether the user can view the students financials categories.
     *
     * @param  \App\User  $user
     * @param  \App\studentsFinancialsCategories  $studentsFinancialsCategories
     * @return mixed
     */
    public function view(User $user, studentsFinancialsCategories $studentsFinancialsCategories)
    {
        return in_array($user->role_id, [
            1, 2, 3, 5,
        ]);
    }

    /**
     * Determine whether the user can create students financials categories.
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
     * Determine whether the user can update the students financials categories.
     *
     * @param  \App\User  $user
     * @param  \App\studentsFinancialsCategories  $studentsFinancialsCategories
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->role_id, [
            1, 2, 3, 5,
        ]);
    }

    /**
     * Determine whether the user can delete the students financials categories.
     *
     * @param  \App\User  $user
     * @param  \App\studentsFinancialsCategories  $studentsFinancialsCategories
     * @return mixed
     */
    public function delete(User $user)
    {
        return in_array($user->role_id, [
            1,
        ]);
    }

    /**
     * Determine whether the user can restore the students financials categories.
     *
     * @param  \App\User  $user
     * @param  \App\studentsFinancialsCategories  $studentsFinancialsCategories
     * @return mixed
     */
    public function restore(User $user, studentsFinancialsCategories $studentsFinancialsCategories)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the students financials categories.
     *
     * @param  \App\User  $user
     * @param  \App\studentsFinancialsCategories  $studentsFinancialsCategories
     * @return mixed
     */
    public function forceDelete(User $user, studentsFinancialsCategories $studentsFinancialsCategories)
    {
        //
    }
}
