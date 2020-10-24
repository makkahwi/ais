<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\users;
use Faker\Generator as Faker;

$factory->define(users::class, function (Faker $faker) {

    return [
        'role_id' => $faker->numberBetween(6,7),
        'schoolNo' => $faker->unique()->numberBetween(1811001,19210999),
        'status' => 2,
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => '$2y$10$wiy0X1bDprWn82RUm2CBlOaa3ygcCy55mHOxRnEmPSblEhRTb98M2',
        'email_verified_at' => $faker->date('Y-m-d H:i:s'),
        'remember_token' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});