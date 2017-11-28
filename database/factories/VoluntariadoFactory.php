<?php

use Faker\Generator as Faker;

$factory->define(App\Voluntariado::class, function (Faker $faker) {
    $date = $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now');
    return [
    	'medida_id' => factory(App\Medida::class),
        'locacion_id' => factory(App\Locacion::class),
		'actividad_voluntariado_id' => App\ActividadVoluntariado::all()->random()->id,
        'fecha_inicio' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
        'fecha_termino' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 years'),
		'cantidad_voluntarios'=> $faker->numberBetween($min = 1, $max = 100),
    	'created_at' => $date,
        'updated_at' => $date,
    ];
});
