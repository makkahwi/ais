<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\staff;
use Faker\Generator as Faker;

$factory->define(staff::class, function (Faker $faker) {

    return [
        'staffNo' => factory(\App\Models\users::class),
        'leaveDate' => $faker->date('Y-m-d H:i:s'),
        'eName' => $faker->name,
        'aName' => $faker->name,
        'dob' => $faker->date('Y-m-d H:i:s'),
        'gender' => $faker->randomElement(['Male', 'Female']),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});