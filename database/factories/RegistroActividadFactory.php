<?php

use Faker\Generator as Faker;

$factory->define(App\RegistroActividad::class, function (Faker $faker) {
    return [
    	'usuario_id' => App\Usuario::all()->random()->id,
        'tipo_actividad_id' => App\TipoActividad::all()->random()->id,
    ];
});
