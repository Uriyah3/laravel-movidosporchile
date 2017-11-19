<?php

use Faker\Generator as Faker;
$factory->define(App\Rnv::class, function (Faker $faker) {
    return [
        'rut' => $faker->unique()->numberBetween($min = 10000000, $max = 300000000),
		'dv' => $faker->randomDigitNotNull,
		'nombre' => $faker->name,
		'email' => $faker->safeEmail,
        'disponible' => $faker->boolean,
    ];
});
