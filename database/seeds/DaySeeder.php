<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days')->insert([[
            'title' => 'Mon الاثنين',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'title' => 'Tue الثلاثاء',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'title' => 'Wed الأربعاء',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'title' => 'Thu الخميس',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'title' => 'Fri الجمعة',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ]]);
    }
}
