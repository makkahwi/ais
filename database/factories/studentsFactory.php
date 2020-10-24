<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\student;
use Faker\Generator as Faker;

$factory->define( student::class, function (Faker $faker) {

    return [
        'studentNo' => factory(\App\Models\users::class),
        'eName' => $faker->name,
        'aName' => $faker->name,
        'dob' => $faker->date('Y-m-d H:i:s'),
        'gender' => $faker->randomElement(['Male', 'Female']),
        'classroom_id' => $faker->numberBetween(1,12),
        'financial' => $faker->numberBetween(0,1),
        'trans' => $faker->numberBetween(0,1),
        'sVisa' => $faker->numberBetween(0,1),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});