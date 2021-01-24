<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\contacts;
use Faker\Generator as Faker;

$factory->define(contacts::class, function (Faker $faker) {

  return [
    'schoolNo' => factory(\App\Models\users::class),
    'email' => $faker->unique()->safeEmail,
    'phone' => $faker->PhoneNumber,
    'address' => $faker->Address,
    'relative_id' => factory(\App\Models\relatives::class),
    'nation' => $faker->randomElement(['Palestine', 'Syria', 'Yemen']),
    'ppno' => $faker->randomDigitNotNull,
    'ppExpiry' => $faker->date('Y-m-d H:i:s'),
    'created_at' => $faker->date('Y-m-d H:i:s'),
    'updated_at' => $faker->date('Y-m-d H:i:s')
  ];
});