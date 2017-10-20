<?php

use Faker\Generator as Faker;
$actividades = ("Ayuda","Coordinaccion","Administracion");
$factory->define(App\TipoActividad::class, function (Faker $faker) {
    return [
        'nombre' =>array_rand($actividades,1);
    ];
});
