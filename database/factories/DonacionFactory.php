<?php

use Faker\Generator as Faker;

$factory->define(App\Donacion::class, function (Faker $faker) {
    return [
    	'medida_id' => factory(App\Medida::class),
    	'titular' => $faker->name,
		'rut_destinatario' => $faker->numberBetween($min = 10000000, $max = 300000000),
		'nombre_banco' => $faker->bank,
		'tipo_cuenta' => $faker->text($maxNbChars = 20) ,
        'cuenta' => $faker->bankAccountNumber,
        'fecha_inicio' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
        'fecha_termino' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 years'),
    ];
});
