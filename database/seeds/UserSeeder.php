<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'role_id' => 1,
            'schoolNo' => 160111,
            'status_id' => 2,
            'name' => 'System Admin',
            'email' => 'arromicreatives@gmail.com',
            'password' => '$2y$10$wiy0X1bDprWn82RUm2CBlOaa3ygcCy55mHOxRnEmPSblEhRTb98M2',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'role_id' => 2,
            'schoolNo' => 161111,
            'status_id' => 2,
            'name' => 'Principal',
            'email' => 'principal@aqsa.edu.my',
            'password' => '$2y$10$wiy0X1bDprWn82RUm2CBlOaa3ygcCy55mHOxRnEmPSblEhRTb98M2',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'role_id' => 3,
            'schoolNo' => 162111,
            'status_id' => 2,
            'name' => 'Vice Principal',
            'email' => 'principal@aqsa.edu.my',
            'password' => '$2y$10$wiy0X1bDprWn82RUm2CBlOaa3ygcCy55mHOxRnEmPSblEhRTb98M2',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'role_id' => 4,
            'schoolNo' => 171111,
            'status_id' => 2,
            'name' => 'Secretary',
            'email' => 'principal@aqsa.edu.my',
            'password' => '$2y$10$wiy0X1bDprWn82RUm2CBlOaa3ygcCy55mHOxRnEmPSblEhRTb98M2',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ],[
            'role_id' => 5,
            'schoolNo' => 172111,
            'status_id' => 2,
            'name' => 'Accountant',
            'email' => 'principal@aqsa.edu.my',
            'password' => '$2y$10$wiy0X1bDprWn82RUm2CBlOaa3ygcCy55mHOxRnEmPSblEhRTb98M2',
            'created_at' => '2020-08-01',
            'updated_at' => '2020-08-01'
        ]]);
    }
}
