<?php

use Faker\Generator as Faker;

$factory->define(App\Permiso::class, function (Faker $faker) {
	$permisos = ["permiso1", "permiso2", "permiso3"];
    return [
        'nombre' => $faker->randomElement($permisos),
    ];
});
