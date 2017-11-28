<?php

use Faker\Generator as Faker;

$factory->define(App\CentroAcopio::class, function (Faker $faker) {
	$date = $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now');
    return [
        'medida_id' => factory(App\Medida::class),
        'locacion_id' => factory(App\Locacion::class),
        'estado_id' => App\Estado::all()->random()->id,
        'fecha_inicio' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
        'fecha_termino' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 years'),
    	'created_at' => $date,
        'updated_at' => $date,
    ];
});
