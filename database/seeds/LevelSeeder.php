<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([[
            'title' => 'KG',
            'description' => 'Kindergarten',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'title' => 'L 1',
            'description' => 'First',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'title' => 'L 2',
            'description' => 'Second',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'title' => 'L 3',
            'description' => 'Third',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'title' => 'L 4',
            'description' => 'Forth',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'title' => 'L 5',
            'description' => 'Fifth',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'title' => 'L 6',
            'description' => 'Sixth',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'title' => 'L 7',
            'description' => 'Seventh',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'title' => 'L 8',
            'description' => 'Eighth',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'title' => 'L 9',
            'description' => 'Ninth',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'title' => 'L 10',
            'description' => 'Tenth',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'title' => 'L 11',
            'description' => 'Eleventh',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ]]);
    }
}
