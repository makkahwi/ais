<?php

namespace App\Policies;

use App\User;
use App\Models\classrooms;
use Illuminate\Auth\Access\HandlesAuthorization;

class classroomsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any classrooms.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        if ($user->status_id == 2)
            return in_array($user->role_id, [
                1, 2, 3, 4, 5, 6
            ]);
    }

    /**
     * Determine whether the user can view the classrooms.
     *
     * @param  \App\User  $user
     * @param  \App\Models\classrooms  $classrooms
     * @return mixed
     */
    public function view(User $user, classrooms $classrooms)
    {
        if (in_array($user->role_id, [1, 2, 3]))
            return $classrooms;
        else if ($classrooms->status_id == 2)
            return $classrooms;
    }

    /**
     * Determine whether the user can view the attendances.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Attendances  $attendances
     * @return mixed
     */
    public function viewClassrooms(User $user, classrooms $classrooms)
    {
        if (in_array($user->role_id, [1, 2, 3]))
            return $classrooms;
        else if ($user->role_id == 7 && $user->student->classroom_id == $classrooms->id)
                return $classrooms; 
            else if ($user->role_id == 6 && $user->schoolNo == $classrooms->supervisor_id)
                    return $classrooms;
            
    }

    /**
     * Determine whether the user can view the classrooms.
     *
     * @param  \App\User  $user
     * @param  \App\Models\classrooms  $classrooms
     * @return mixed
     */
    public function viewStudents(User $user, classrooms $classrooms)
    {
        if (in_array($user->role_id, [1, 2, 3]))
            return $classrooms;
        else if ($classrooms->supervisor_id == $user->schoolNo)
            return $classrooms;
        else if ($user->role_id == 7 && $user->student->classroom_id == $classrooms->id)
            return $classrooms;
        else if ($user->role_id == 6)
            foreach($classrooms->sches as $sch)
                if ($user->schoolNo == $sch->teacher_id) {
                    return $classrooms;
                    break;}

    }

    /**
     * Determine whether the user can view the classrooms.
     *
     * @param  \App\User  $user
     * @param  \App\Models\classrooms  $classrooms
     * @return mixed
     */
    public function viewStudentsContacts(User $user, classrooms $classrooms)
    {
        if (in_array($user->role_id, [1, 2, 3]))
            return $classrooms;
        else if ($classrooms->supervisor_id == $user->schoolNo)
            return $classrooms;

    }

    /**
     * Determine whether the user can create classrooms.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return in_array($user->role_id, [
            1, 2, 3, 4
        ]);
    }

    /**
     * Determine whether the user can update the classrooms.
     *
     * @param  \App\User  $user
     * @param  \App\Models\classrooms  $classrooms
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->role_id, [
            1, 2, 3, 4
        ]);
    }

    /**
     * Determine whether the user can delete the classrooms.
     *
     * @param  \App\User  $user
     * @param  \App\Models\classrooms  $classrooms
     * @return mixed
     */
    public function delete(User $user)
    {
        return in_array($user->role_id, [
            1,
        ]);
    }

    /**
     * Determine whether the user can restore the classrooms.
     *
     * @param  \App\User  $user
     * @param  \App\Models\classrooms  $classrooms
     * @return mixed
     */
    public function restore(User $user, classrooms $classrooms)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the classrooms.
     *
     * @param  \App\User  $user
     * @param  \App\Models\classrooms  $classrooms
     * @return mixed
     */
    public function forceDelete(User $user, classrooms $classrooms)
    {
        //
    }
}
