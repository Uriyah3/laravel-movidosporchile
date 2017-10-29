<?php

use Faker\Generator as Faker;
$factory->define(App\Rnv::class, function (Faker $faker) {
    return [
        'rut' => App\Voluntario::all()->random()->rut,
        'disponible' => $faker->boolean,
    ];
});
