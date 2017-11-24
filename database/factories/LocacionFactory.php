<?php

use Faker\Generator as Faker;

$factory->define(App\Locacion::class, function (Faker $faker) {
    return [
        'latitude' => $faker->latitude(),
        'longitude' => $faker->longitude(),
        'comuna_id' => App\Comuna::all()->random()->id,
    ];
});
