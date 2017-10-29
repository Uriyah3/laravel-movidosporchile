<?php

use Faker\Generator as Faker;

$factory->define(App\Locacion::class, function (Faker $faker) {
    return [
        'punto_gx' => $faker->latitude(),
        'punto_gy' => $faker->longitude(),
        'comuna_id' => App\Comuna::all()->random()->id,
    ];
});
