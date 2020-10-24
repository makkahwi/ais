<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\relatives;
use Faker\Generator as Faker;

$factory->define(relatives::class, function (Faker $faker) {

    return [
        'reName' => $faker->name,
        'raName' => $faker->name,
        'rName' => $faker->name,
        'rGender' => $faker->randomElement(['Male ذكر', 'Female أنثى']),
        'relation' => $faker->word,
        'job' => $faker->word,
        'org' => $faker->word,
        'rEmail' => $faker->unique()->safeEmail,
        'rPhone' => $faker->PhoneNumber,
        'rhAddress' => $faker->address,
        'rwAddress' => $faker->address,
        'more' => $faker->PhoneNumber,
        'rNation' => $faker->randomElement(['Palestine', 'Syria', 'Yemen', 'Jordan']),
        'rppno' => $faker->unique()->text,
        'rppExpiry' => $faker->date('Y-m-d H:i:s'),
        'rPassport' => $faker->text,
        'rVisa' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});