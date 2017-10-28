<?php

use Faker\Generator as Faker;

$factory->define(App\TipoMedida::class, function (Faker $faker) {
	$medidas = ["medida1","medida2","medida3","medida4"];
    return [
        'nombre' => $faker->randomElement($medidas),
    ];
});
