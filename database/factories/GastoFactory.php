<?php

use Faker\Generator as Faker;

$factory->define(App\Gasto::class, function (Faker $faker) {
    return [
        'fecha' => $faker -> time(pattern="%H:%M:%S", end_datetime=None),//esto está correcto?
        'monto' =>  random_int(1, 90000000000000),//es el indicado para esto?
        'proposito' => $faker->text(),
    ];
});
