<?php

use Faker\Generator as Faker;

$factory->define(App\Bien::class, function (Faker $faker) {
    return [
<<<<<<< HEAD
    	'centro_acopio_id' => random_int(\DB::table('centro_acopios')->min('id'), \DB::table('centro_acopios')->max('id')),
    	'tipo_medida_id' => random_int(\DB::table('tipo_medidas')->min('id'), \DB::table('tipo_medidas')->max('id')),
    	'tipo' => str_random(30),   //por que?
    	'cantidad' => random_int(1, 50),//hasta 50 cantidades unitarias.
=======
    	'centro_acopio_id' => App\CentroAcopio::all()->random()->id,
    	'tipo_medida_id' => App\TipoMedida::all()->random()->id,
    	'tipo' => str_random(30),
    	'cantidad' => $faker->numberBetween($min = 1, $max = 50),//hasta 50 cantidades unitarias.
>>>>>>> e638a43ce425afd6b7d653314dbde22bab5b6148
    	'rut' => App\Usuario::all()->random()->rut,
    ];
});
