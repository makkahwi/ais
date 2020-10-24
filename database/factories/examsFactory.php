<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\exams;
use Faker\Generator as Faker;

$factory->define(exams::class, function (Faker $faker) {

    return [
        'semId' => 1,
        'level_id' => $faker->numberBetween(1,12),
        'course_id' => factory(\App\Models\courses::class),
        'type' => $faker->randomElement(['Mid-term Exam امتحان نصفي', 'Final Exam امتحان نهائي']),
        'date' => $faker->date('Y-m-d H:i:s'),
        'note' => $faker->paragraph,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});