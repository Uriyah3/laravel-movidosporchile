<?php

use Faker\Generator as Faker;

$factory->define(App\CentroAcopio::class, function (Faker $faker) {
    return [
        
        'locacion_id' => $factory->create('App\Locacion')->id,
        'estado_id' => App\Estado::all()->random()->id,
        'fecha_inicio' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
        'fecha_termino' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 years'),
        'objetivos' => $faker->text(),
        'descripcion' => $faker->text(),
        'created' =>  $faker->dateTimeThisYear(),
        'modified' => $faker->dateTimeThisYear(),
    ];
});
