<?php

use Faker\Generator as Faker;

$factory->define(App\Deposito::class, function (Faker $faker) {
	$donacion = App\Donacion::all()->random();
    return [
        'usuario_id' => App\Usuario::where('rol_id', 4)->get()->random()->id,
        'donacion_id' => $donacion->id,
        'fecha' => $faker->dateTimeBetween($startDate=$donacion->fecha_inicio, $endDate=$donacion->fecha_termino),
		'monto' =>  $faker->numberBetween($min = 10000, $max = 1000000),
    ];
});
