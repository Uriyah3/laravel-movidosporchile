<?php

use Faker\Generator as Faker;

$factory->define(App\Deposito::class, function (Faker $faker) {
    return [
        'donacion_id' => App\Donacion::all()->random()->id,
        'nombre' => $faker->name,
        'rut' => App\Usuario::all()->random()->rut,
        'monto' =>  random_int(1, 2000000000),
    ];
});
