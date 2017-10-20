<?php

use Faker\Generator as Faker;
$booleano = ("TRUE", "FALSE");
$factory->define(App\Rnv::class, function (Faker $faker) {
    return [
        'rut' => $faker->unique()->random_int(9, 9),// nose si esto se enuantra correcto para la generacion del rut
        'disponible' => array_rand($booleano,1),
    ];
});
