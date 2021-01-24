<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('classrooms')->insert([[
      'title' => 'KG',
      'level_id' => 1,
      'roomNo' => 1,
      'capacity' => 20,
      'description' => 'Descriptions',
      'supervisor_id' => 1234567,
      'created_at' => '2018-08-01',
      'updated_at' => '2018-08-01'
    ],[
      'title' => '1A',
      'level_id' => 2,
      'roomNo' => 2,
      'capacity' => 20,
      'description' => 'Descriptions',
      'supervisor_id' => 1234567,
      'created_at' => '2018-08-01',
      'updated_at' => '2018-08-01'
    ],[
      'title' => '2A',
      'level_id' => 3,
      'roomNo' => 3,
      'capacity' => 20,
      'description' => 'Descriptions',
      'supervisor_id' => 1234567,
      'created_at' => '2018-08-01',
      'updated_at' => '2018-08-01'
    ],[
      'title' => '3A',
      'level_id' => 4,
      'roomNo' => 4,
      'capacity' => 20,
      'description' => 'Descriptions',
      'supervisor_id' => 1234567,
      'created_at' => '2018-08-01',
      'updated_at' => '2018-08-01'
    ],[
      'title' => '4A',
      'level_id' => 5,
      'roomNo' => 5,
      'capacity' => 20,
      'description' => 'Descriptions',
      'supervisor_id' => 1234567,
      'created_at' => '2018-08-01',
      'updated_at' => '2018-08-01'
    ],[
      'title' => '5A',
      'level_id' => 6,
      'roomNo' => 6,
      'capacity' => 20,
      'description' => 'Descriptions',
      'supervisor_id' => 1234567,
      'created_at' => '2018-08-01',
      'updated_at' => '2018-08-01'
    ],[
      'title' => '6A',
      'level_id' => 7,
      'roomNo' => 7,
      'capacity' => 20,
      'description' => 'Descriptions',
      'supervisor_id' => 1234567,
      'created_at' => '2018-08-01',
      'updated_at' => '2018-08-01'
    ],[
      'title' => '7A',
      'level_id' => 8,
      'roomNo' => 8,
      'capacity' => 20,
      'description' => 'Descriptions',
      'supervisor_id' => 1234567,
      'created_at' => '2018-08-01',
      'updated_at' => '2018-08-01'
    ],[
      'title' => '8A',
      'level_id' => 9,
      'roomNo' => 9,
      'capacity' => 20,
      'description' => 'Descriptions',
      'supervisor_id' => 1234567,
      'created_at' => '2018-08-01',
      'updated_at' => '2018-08-01'
    ],[
      'title' => '9A',
      'level_id' => 10,
      'roomNo' => 10,
      'capacity' => 20,
      'description' => 'Descriptions',
      'supervisor_id' => 1234567,
      'created_at' => '2018-08-01',
      'updated_at' => '2018-08-01'
    ],[
      'title' => '10A',
      'level_id' => 11,
      'roomNo' => 11,
      'capacity' => 20,
      'description' => 'Descriptions',
      'supervisor_id' => 1234567,
      'created_at' => '2019-08-01',
      'updated_at' => '2019-08-01'
    ],[
      'title' => '11A',
      'level_id' => 12,
      'roomNo' => 12,
      'capacity' => 20,
      'description' => 'Descriptions',
      'supervisor_id' => 1234567,
      'created_at' => '2020-08-01',
      'updated_at' => '2020-08-01'
    ]]);
  }
}
