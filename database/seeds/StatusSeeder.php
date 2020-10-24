<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class statusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([[
            'title' => 'Deactivated معطّل',
            'description' => 'Could only see own profile and old data',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'title' => 'Activated مفعّل',
            'description' => 'Could have full access according to role',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'title' => 'Moved منتقل',
            'description' => 'Could only see own profile and old data',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'title' => 'Suspended مفصول',
            'description' => 'Could only see own profile and old data',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'title' => 'Graduated متخرج',
            'description' => 'Could only see own profile and old data',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'title' => 'Applicant متقدم',
            'description' => 'Could only see own profile',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'title' => 'Accepted Applicant متقدم مقبول',
            'description' => 'Could only see own profile',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'title' => 'Rejected Applicant متقدم مرفوض',
            'description' => 'Could only see own profile',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ]]);
    }
}
