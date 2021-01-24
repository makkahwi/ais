<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('times')->insert([[
      'title' => 'First',
      'start' => '08:00:00',
      'end' => '08:55:00',
      'created_at' => '2020-08-01',
      'updated_at' => '2020-08-01'
    ],[
      'title' => 'Second',
      'start' => '09:00:00',
      'end' => '09:45:00',
      'created_at' => '2020-08-01',
      'updated_at' => '2020-08-01'
    ],[
      'title' => 'Third',
      'start' => '09:50:00',
      'end' => '10:35:00',
      'created_at' => '2020-08-01',
      'updated_at' => '2020-08-01'
    ],[
      'title' => 'Forth',
      'start' => '10:55:00',
      'end' => '11:40:00',
      'created_at' => '2020-08-01',
      'updated_at' => '2020-08-01'
    ],[
      'title' => 'Fifth',
      'start' => '11:45:00',
      'end' => '12:30:00',
      'created_at' => '2020-08-01',
      'updated_at' => '2020-08-01'
    ],[
      'title' => 'Sixth',
      'start' => '12:35:00',
      'end' => '13:10:00',
      'created_at' => '2020-08-01',
      'updated_at' => '2020-08-01'
    ],[
      'title' => 'Seventh',
      'start' => '13:50:00',
      'end' => '14:25:00',
      'created_at' => '2020-08-01',
      'updated_at' => '2020-08-01'
    ],[
      'title' => 'Eighth',
      'start' => '14:30:00',
      'end' => '15:15:00',
      'created_at' => '2020-08-01',
      'updated_at' => '2020-08-01'
    ]]);
  }
}
