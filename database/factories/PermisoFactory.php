<?php

use Faker\Generator as Faker;
$permisos = ["permiso1", "permiso2"];
$factory->define(App\Permiso::class, function (Faker $faker) {
    return [
        'nombre' => $faker->randomElement($permisos),
    ];
});
