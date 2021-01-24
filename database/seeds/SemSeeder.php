<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class semSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('sems')->insert([[
      'title' => 'Sem 1',
      'year_id' => '1',
      'start' => '2020-09-08',
      'join' => '2020-10-08',
      'results' => '2021-01-08',
      'end' => '2021-01-31',
    ]]);
  }
}