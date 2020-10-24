<?php

namespace App\Policies;

use App\Models\student;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class studentsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any student.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        if ($user->status_id == 2)
            return in_array($user->role_id, [
                1, 2, 3, 4, 6
            ]);
    }

    /**
     * Determine whether the user can view the student.
     *
     * @param  \App\User  $user
     * @param  \App\Models\student  $student
     * @return mixed
     */
    public function view(User $user, student $student)
    {
        if ($student->user->status_id == 2)
            return $student;
        else if (in_array($user->role_id, [1, 2, 3]))
            return $student;
    }

    /**
     * Determine whether the user can create student.
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
     * Determine whether the user can update the student.
     *
     * @param  \App\User  $user
     * @param  \App\Models\student  $student
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->role_id, [
            1, 2, 3, 4
        ]);
    }

    /**
     * Determine whether the user can update the student.
     *
     * @param  \App\User  $user
     * @param  \App\Models\student  $student
     * @return mixed
     */
    public function upgrade(User $user)
    {
        return in_array($user->role_id, [
            1, 2, 3
        ]);
    }

    /**
     * Determine whether the user can delete the student.
     *
     * @param  \App\User  $user
     * @param  \App\Models\student  $student
     * @return mixed
     */
    public function delete(User $user)
    {
        return in_array($user->role_id, [
            1,
        ]);
    }

    /**
     * Determine whether the user can restore the student.
     *
     * @param  \App\User  $user
     * @param  \App\Models\student  $student
     * @return mixed
     */
    public function restore(User $user, student $student)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the student.
     *
     * @param  \App\User  $user
     * @param  \App\Models\student  $student
     * @return mixed
     */
    public function forceDelete(User $user, student $student)
    {
        //
    }
}
