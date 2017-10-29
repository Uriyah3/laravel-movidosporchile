<?php

use Faker\Generator as Faker;

$factory->define(App\Deposito::class, function (Faker $faker) {
    return [
        'donacion_id' => App\Donacion::all()->random()->id,
        'nombre' => $faker->name,
        'rut' => App\Usuario::all()->random()->rut,
<<<<<<< HEAD
        'monto' =>  random_int(1, 2000000000),//es el indicado para esto?
=======
		'monto' =>  $faker->numberBetween($min = 1, $max = 2000000000),
>>>>>>> e638a43ce425afd6b7d653314dbde22bab5b6148
    ];
});
