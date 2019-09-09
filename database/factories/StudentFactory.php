<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Factory as Faker;

$factory->define(App\Student::class, function ( $faker) {
    $faker = Faker::create('vi_VN');
    return [

        'name' => $faker->name,
        'age' =>$faker->numberBetween(13,18),
        'class' =>$faker->numberBetween(8,12),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
