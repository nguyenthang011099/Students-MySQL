<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Factory as Faker;

$factory->define(App\Student::class, function ( $faker) {
    $faker = Faker::create('vi_VN');
    return [

        'name' => $faker->name,
        'age' =>$faker->numberBetween(10,18),
        'class' =>$faker->numberBetween(5,12),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
