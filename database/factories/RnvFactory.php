<?php

use Faker\Generator as Faker;
$factory->define(App\Rnv::class, function (Faker $faker) {
    return [
        'rut' => $faker->unique()->numberBetween($min = 1000000, $max = 20000000),
		'dv' => $faker->randomDigitNotNull,
		'nombre' => $faker->name,
		'email' => $faker->safeEmail,
        'disponible' => $faker->boolean,
    ];
});
