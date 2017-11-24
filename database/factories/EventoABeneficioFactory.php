<?php

use Faker\Generator as Faker;

$factory->define(App\EventoABeneficio::class, function (Faker $faker) {
    return [
        'medida_id' => factory(App\Medida::class),
        'locacion_id' => factory(App\Locacion::class),
        'fecha' => $faker->date(),
        'horario_inicio' => $faker->time(),
        'horario_termino' => $faker->time(),
        'actividades' => $faker->text(),
    ];
});
