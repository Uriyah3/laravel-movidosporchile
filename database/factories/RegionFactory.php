<?php

use Faker\Generator as Faker;

$factory->define(App\Region::class, function (Faker $faker) {
	$regiones = ["Arica y parinacota","Antofagasta","Tarapaca","Atacama","Coquimbo","Valparaiso","RM","O higgins","Maule","Bio-Bio","la araucana","Los rios","Los lagos","Aysen","Magallanes"];
    return [
        'nombre' => $faker->randomElement($regiones),
    ];
});
