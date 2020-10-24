<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\courses;
use Faker\Generator as Faker;

$factory->define(courses::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'code' => $faker->unique()->sentence,
        'textbook' => $faker->word,
        'level_id' => $faker->numberBetween(1,12),
        'description' => $faker->paragraph,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});