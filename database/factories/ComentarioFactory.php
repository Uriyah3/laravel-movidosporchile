<?php

use Faker\Generator as Faker;

$factory->define(App\Comentario::class, function (Faker $faker) {
    return [
    	'medida_id' => App\Medida::all()->random()->id,
    	'usuario_id' => App\Usuario::all()->random()->id,
    	'descripcion' => $faker->text(),
    ];
});
