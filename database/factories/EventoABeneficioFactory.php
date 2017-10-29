<?php

use Faker\Generator as Faker;

$factory->define(App\EventoABeneficio::class, function (Faker $faker) {
    return [
        'locacion_id' => factory(App\Locacion::class),
        'fecha' => $faker->date(),
        'horario_inicio' => $faker->time(),
        'horario_termino' => $faker->time(),
        'descripcion' => $faker->text(),
        'objetivos' => $faker->text(),
        'actividades' => $faker->text(),
    ];
});
