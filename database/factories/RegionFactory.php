<?php

use Faker\Generator as Faker;
$regiones = ("Arica y parinacota","Antofagasta","Tarapaca","Atacama","Coquimbo","Valparaiso","RM","O higgins","Maule","Bio-Bio","la araucana","Los rios","Los lagos","Aysen","Magallanes");
$factory->define(App\Region::class, function (Faker $faker) {
    return [
        'nombre' => array_rand($regiones,1),
    ];
});
