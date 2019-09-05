<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [

        'name' => $faker->name,
        'age' =>$faker->numberBetween(10,18),
        'class' =>$faker->numberBetween(5,12),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
