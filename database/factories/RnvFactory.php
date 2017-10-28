<?php

use Faker\Generator as Faker;
$factory->define(App\Rnv::class, function (Faker $faker) {
    return [
        'rut' => App\TipoActividad::all()->random()->rut,
        'disponible' => $faker->boolean,
    ];
});
