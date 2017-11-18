<?php

use Faker\Generator as Faker;

$factory->define(App\Bien::class, function (Faker $faker) {
    return [
    	'centro_acopio_id' => App\CentroAcopio::all()->random()->id,
    	'medicion_id' => App\Medicion::all()->random()->id,
    	'tipo' => str_random(30),
    	'cantidad' => $faker->numberBetween($min = 1, $max = 50),//hasta 50 cantidades unitarias.
    	'rut' => App\Usuario::all()->random()->rut,
    ];
});
