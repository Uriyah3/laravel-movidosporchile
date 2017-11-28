<?php

use Faker\Generator as Faker;

$factory->define(App\Gasto::class, function (Faker $faker) {
    return [
    	'usuario_id' => App\Usuario::all()->random()->id,
        'fecha' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
        'monto' =>  $faker->numberBetween($min = 10000, $max = 1000000),
        'proposito' => $faker->text(),
    ];
});
