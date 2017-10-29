<?php

use Faker\Generator as Faker;

$factory->define(App\Gasto::class, function (Faker $faker) {
    return [
        'fecha' => $faker->dateTime(),
        'monto' =>  $faker->numberBetween($min = 1, $max = 2000000000),
        'proposito' => $faker->text(),
    ];
});
