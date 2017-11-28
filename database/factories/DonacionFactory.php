<?php

use Faker\Generator as Faker;

$factory->define(App\Donacion::class, function (Faker $faker) {
    $date = $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now');
    return [
    	'medida_id' => factory(App\Medida::class),
    	'titular' => $faker->name,
		'rut_destinatario' => $faker->numberBetween($min = 1000000, $max = 20000000),
		'nombre_banco' => $faker->name,
		'tipo_cuenta' => $faker->text($maxNbChars = 20) ,
        'cuenta' => $faker->bankAccountNumber,
        'fecha_inicio' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
        'fecha_termino' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 years'),
        'created_at' => $date,
        'updated_at' => $date,
    ];
});
