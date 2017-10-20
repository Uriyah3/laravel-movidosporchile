<?php

use Faker\Generator as Faker;
$medidas = ("medida1","medida2","medida3","medida4");
$factory->define(App\TipoMedida::class, function (Faker $faker) {
    return [
        'nombre' => array_rand($medidas,1);
    ];
});
