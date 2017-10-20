<?php

use Faker\Generator as Faker;
$categorias =("Jefe","Administrativo","Voluntario","Usuario","Usuario natural");
$factory->define(App\Rol::class, function (Faker $faker) {
    return [
        'nombre'-> array_rand($categorias,1),
    ];
});
