<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\marks;
use Faker\Generator as Faker;

$factory->define(marks::class, function (Faker $faker) {

    return [
        'type_id' => factory(\App\Models\markstypes::class),
        'studentNo' => factory(\App\Models\users::class),
        'markValue' => $faker->numberBetween(1,100),
        'note' => $faker->name,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});