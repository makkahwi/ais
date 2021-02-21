<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use App\Models\sems;
use App\Models\days;
use App\Models\exams;
use App\Models\marks;
use App\Models\roles;
use App\Models\sches;
use App\Models\times;
use App\Models\users;
use App\Models\years;
use App\Models\staff;
use App\Models\levels;
use App\Models\batches;
use App\Models\student;
use App\Models\courses;
use App\Models\statuses;
use App\Models\contacts;
use App\Models\relatives;
use App\Models\classrooms;
use App\Models\markstypes;
use App\Models\attendances;
use App\Models\studentVisas;
use App\Models\studentsPayments;
use App\Models\studentsFinancials;
use App\Models\studentsFinancialsCategories;
use App\Models\studentsFinancialsDiscounts;

use App\Policies\semsPolicy;
use App\Policies\daysPolicy;
use App\Policies\examsPolicy;
use App\Policies\marksPolicy;
use App\Policies\rolesPolicy;
use App\Policies\schesPolicy;
use App\Policies\timesPolicy;
use App\Policies\usersPolicy;
use App\Policies\YearsPolicy;
use App\Policies\staffPolicy;
use App\Policies\levelsPolicy;
use App\Policies\batchesPolicy;
use App\Policies\studentsPolicy;
use App\Policies\coursesPolicy;
use App\Policies\statusesPolicy;
use App\Policies\contactsPolicy;
use App\Policies\relativesPolicy;
use App\Policies\classroomsPolicy;
use App\Policies\markstypesPolicy;
use App\Policies\attendancesPolicy;
use App\Policies\studentVisasPolicy;
use App\Policies\studentsPaymentsPolicy;
use App\Policies\studentsFinancialsPolicy;
use App\Policies\studentsFinancialsCategoriesPolicy;
use App\Policies\studentsFinancialsDiscountsPolicy;

class AuthServiceProvider extends ServiceProvider
{
  /**
   * The policy mappings for the application.
   *
   * @var array
   */
  protected $policies = [
    sems::class => semsPolicy::class,
    days::class => daysPolicy::class,
    exams::class => examsPolicy::class,
    marks::class => marksPolicy::class,
    times::class => timesPolicy::class,
    users::class => usersPolicy::class,
    years::class => yearsPolicy::class,
    staff::class => staffPolicy::class,
    roles::class => rolesPolicy::class,
    sches::class => schesPolicy::class,
    levels::class => levelsPolicy::class,
    batches::class => batchesPolicy::class,
    courses::class => coursesPolicy::class,
    student::class => studentsPolicy::class,
    contacts::class => contactsPolicy::class,
    statuses::class => statusesPolicy::class,
    relatives::class => relativesPolicy::class,
    markstypes::class => markstypesPolicy::class,
    classrooms::class => classroomsPolicy::class,
    attendances::class => attendancesPolicy::class,
    studentVisas::class => studentVisasPolicy::class,
    studentsPayments::class => studentsPaymentsPolicy::class,
    studentsFinancials::class => studentsFinancialsPolicy::class,
    studentsFinancialsDiscounts::class => studentsFinancialsDiscountsPolicy::class,
    studentsFinancialsCategories::class => studentsFinancialsCategoriesPolicy::class,
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
