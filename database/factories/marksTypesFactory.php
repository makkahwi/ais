<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\markstypes;
use Faker\Generator as Faker;

$factory->define(markstypes::class, function (Faker $faker) {

  return [
    'typeName' => $faker->randomElement(['Assignment', 'Quiz', 'Mid', 'Final']),
    'semId' => 1,
    'classroom_id' => $faker->numberBetween(1,12),
    'course_id' => factory(\App\Models\courses::class),
    'teacher_id' => factory(\App\Models\staff::class),
    'max' => $faker->numberBetween(50,100),
    'weight' => $faker->numberBetween(50,100),
    'deadline' => $faker->date('Y-m-d H:i:s'),
    'created_at' => $faker->date('Y-m-d H:i:s'),
    'updated_at' => $faker->date('Y-m-d H:i:s')
  ];
});