<?php

use Faker\Generator as Faker;

$factory->define(App\Bien::class, function (Faker $faker) {
    return [
    	'usuario_id' => App\Usuario::where('rol_id', 4)->get()->random()->id,
    	'centro_acopio_id' => App\CentroAcopio::aprobado()->get()->random()->id,
    	'medicion_id' => App\Medicion::all()->random()->id,
    	'tipo' => str_random(30),
    	'cantidad' => $faker->numberBetween($min = 1, $max = 50),//hasta 50 cantidades unitarias.
    ];
});
