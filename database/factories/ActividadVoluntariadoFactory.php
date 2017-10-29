<?php

use Faker\Generator as Faker;

$factory->define(App\ActividadVoluntariado::class, function (Faker $faker) {
    return [
        'nombre' => $faker->streetName,
    ];
});
