<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\attendances;
use Faker\Generator as Faker;

$factory->define(attendances::class, function (Faker $faker) {

  return [
    'semId' => 1,
    'schoolNo' => factory(\App\Models\users::class),
    'date' => $faker->date('Y-m-d H:i:s'),
    'atten' => $faker->numberBetween(0,2),
    'note' => $faker->sentence,
    'created_at' => $faker->date('Y-m-d H:i:s'),
    'updated_at' => $faker->date('Y-m-d H:i:s')
  ];
});