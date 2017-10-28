<?php

use Faker\Generator as Faker;

$factory->define(App\Rol::class, function (Faker $faker) {
	$categorias = ["Jefe","Administrativo","Voluntario","Usuario","Usuario natural"];
    return [
        'nombre'=> $faker->randomElement($array = $categorias),
    ];
});
