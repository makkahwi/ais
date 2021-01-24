<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('roles')->insert([[
      'title' => 'System Admin',
      'description' => 'Full Access of View, Edit & Delete',
      'created_at' => '2020-08-01',
      'updated_at' => '2020-08-01'
    ],[
      'title' => 'Principal',
      'description' => 'Full Access of View & Edit except for Static Data',
      'created_at' => '2020-08-01',
      'updated_at' => '2020-08-01'
    ],[
      'title' => 'Vice Principal',
      'description' => 'Full Access of View & Edit except for Static Data',
      'created_at' => '2020-08-01',
      'updated_at' => '2020-08-01'
    ],[
      'title' => 'Secretary',
      'description' => 'Limited Access of View & Edit to Biodata, announcements & attendance data only',
      'created_at' => '2020-08-01',
      'updated_at' => '2020-08-01'
    ],[
      'title' => 'Accountant',
      'description' => 'Limited Access of View & Edit to financial data only',
      'created_at' => '2020-08-01',
      'updated_at' => '2020-08-01'
    ],[
      'title' => 'Teacher',
      'description' => 'Limited Access of View & Edit to relevant financial, profile own classes and courses data',
      'created_at' => '2020-08-01',
      'updated_at' => '2020-08-01'
    ],[
      'title' => 'Student',
      'description' => 'Limited Access of View to relevant financial, profile own classes and courses data',
      'created_at' => '2020-08-01',
      'updated_at' => '2020-08-01'
    ],[
      'title' => 'Applicant',
      'description' => 'Limited Access of View to own profile and application data only',
      'created_at' => '2020-08-01',
      'updated_at' => '2020-08-01'
    ]]);
  }
}
