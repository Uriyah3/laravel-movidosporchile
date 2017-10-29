<?php

use Faker\Generator as Faker;

$factory->define(App\Voluntario::class, function (Faker $faker) {
    return [
    	'voluntariado_id' => App\Voluntariado::all()->random()->id,
    	'finalizado' => $faker->boolean,
    	'rut' => App\Usuario::all()->random()->rut,
    ];
});
