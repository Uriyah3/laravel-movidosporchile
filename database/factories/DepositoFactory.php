<?php

use Faker\Generator as Faker;

$factory->define(App\Deposito::class, function (Faker $faker) {
    return [
        'usuario_id' => App\Usuario::all()->random()->id,
        'donacion_id' => App\Donacion::all()->random()->id,
        'fecha' => $faker->dateTime(),
		'monto' =>  $faker->numberBetween($min = 1, $max = 2000000000),
    ];
});
