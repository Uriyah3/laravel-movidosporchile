<?php

use Faker\Generator as Faker;

$factory->define(App\TipoActividad::class, function (Faker $faker) {
	$actividades = ["Ayuda","Coordinaccion","Administracion"];
    return [
        'nombre' => $faker->randomElement($actividades),
    ];
});
