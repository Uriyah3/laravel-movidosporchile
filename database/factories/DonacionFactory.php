<?php

use Faker\Generator as Faker;

$factory->define(App\Donacion::class, function (Faker $faker) {
    return [
        'cuenta' => $faker->bankAccountNumber,
        'fecha_inicio' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
        'fecha_termino' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 years'),
        'descripcion' => $faker->text(),
        'objetivos' => $faker->text(),
    ];
});
