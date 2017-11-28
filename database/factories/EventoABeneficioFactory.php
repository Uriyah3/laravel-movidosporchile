<?php

use Faker\Generator as Faker;

$factory->define(App\EventoABeneficio::class, function (Faker $faker) {
    $date = $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now');
    return [
        'medida_id' => factory(App\Medida::class),
        'locacion_id' => factory(App\Locacion::class),
        'fecha' => $faker->date(),
        'horario_inicio' => $faker->time($format = 'H:i'),
        'horario_termino' => $faker->time($format = 'H:i'),
        'actividades' => $faker->text(),
    	'created_at' => $date,
        'updated_at' => $date,
    ];
});
