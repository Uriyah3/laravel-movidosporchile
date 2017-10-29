<?php

use Faker\Generator as Faker;

$factory->define(App\CentroAcopio::class, function (Faker $faker) {
    return [
        'usuario_id' => App\Usuario::all()->random()->id,
        'locacion_id' => factory(App\Locacion::class),
        'estado_id' => App\Estado::all()->random()->id,
        'fecha_inicio' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
        'fecha_termino' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 years'),
        'objetivos' => $faker->text(),
        'descripcion' => $faker->text(),
    ];
});
