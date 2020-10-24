<?php

namespace App\Providers;

use App\Models\attendances;
use App\Models\batches;
use App\Models\classrooms;
use App\Models\contacts;
use App\Models\courses;
use App\Models\days;
use App\Models\exams;
use App\Models\levels;
use App\Models\marks;
use App\Models\markstypes;
use App\Models\relatives;
use App\Models\roles;
use App\Models\sches;
use App\Models\sems;
use App\Models\staff;
use App\Models\statuses;
use App\Models\student;
use App\Models\studentsFinancials;
use App\Models\studentsFinancialsCategories;
use App\Models\studentsFinancialsDiscounts;
use App\Models\times;
use App\Models\users;
use App\Models\years;
use App\Policies\attendancesPolicy;
use App\Policies\classroomsPolicy;
use App\Policies\batchesPolicy;
use App\Policies\contactsPolicy;
use App\Policies\coursesPolicy;
use App\Policies\daysPolicy;
use App\Policies\examsPolicy;
use App\Policies\levelsPolicy;
use App\Policies\marksPolicy;
use App\Policies\markstypesPolicy;
use App\Policies\relativesPolicy;
use App\Policies\rolesPolicy;
use App\Policies\schesPolicy;
use App\Policies\semsPolicy;
use App\Policies\staffPolicy;
use App\Policies\statusesPolicy;
use App\Policies\studentsPolicy;
use App\Policies\studentsFinancialsPolicy;
use App\Policies\studentsFinancialsCategoriesPolicy;
use App\Policies\studentsFinancialsDiscountsPolicy;
use App\Policies\timesPolicy;
use App\Policies\usersPolicy;
use App\Policies\YearsPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        attendances::class => attendancesPolicy::class,
        batches::class => batchesPolicy::class,
        classrooms::class => classroomsPolicy::class,
        contacts::class => contactsPolicy::class,
        courses::class => coursesPolicy::class,
        days::class => daysPolicy::class,
        exams::class => examsPolicy::class,
        levels::class => levelsPolicy::class,
        marks::class => marksPolicy::class,
        markstypes::class => markstypesPolicy::class,
        relatives::class => relativesPolicy::class,
        roles::class => rolesPolicy::class,
        sches::class => schesPolicy::class,
        sems::class => semsPolicy::class,
        staff::class => staffPolicy::class,
        statuses::class => statusesPolicy::class,
        student::class => studentsPolicy::class,
        studentsFinancials::class => studentsFinancialsPolicy::class,
        studentsFinancialsCategories::class => studentsFinancialsCategoriesPolicy::class,
        studentsFinancialsDiscounts::class => studentsFinancialsDiscountsPolicy::class,
        times::class => timesPolicy::class,
        users::class => usersPolicy::class,
        years::class => yearsPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admn-access', function ($user) {
            return $user->role_id == 1;
        });
    }
}
