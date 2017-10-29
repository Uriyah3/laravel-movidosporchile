<?php

use Faker\Generator as Faker;

$factory->define(App\Deposito::class, function (Faker $faker) {
    return [
        'donacion_id' => App\Donacion::all()->random()->id,
        'nombre' => $faker->name,
        'rut' => App\Usuario::all()->random()->rut,
		'monto' =>  $faker->numberBetween($min = 1, $max = 2000000000),
    ];
});
