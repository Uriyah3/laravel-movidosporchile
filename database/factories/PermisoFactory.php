<?php

use Faker\Generator as Faker;

$factory->define(App\Permiso::class, function (Faker $faker) {
	$permisos = ["permiso1", "permiso2"];
    return [
        'nombre' => $faker->randomElement($permisos),
    ];
});
