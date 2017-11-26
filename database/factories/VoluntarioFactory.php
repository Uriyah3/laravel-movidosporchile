<?php

use Faker\Generator as Faker;

$factory->define(App\Voluntario::class, function (Faker $faker) {
    return [
    	'usuario_id' => App\Usuario::all()->random()->id,
    	'voluntariado_id' => App\Voluntariado::aprobado()->get()->random()->id,
    	'finalizado' => $faker->boolean,
    ];
});
