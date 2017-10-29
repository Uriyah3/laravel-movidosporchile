<?php

use Faker\Generator as Faker;

$factory->define(App\TipoCatastrofe::class, function (Faker $faker) {
	$catastrofes = ["Terremoto","Tsunami","Incendio","Crisis Humanitaria","Epidemias"];
    return [
        'nombre' => $faker->randomElement($catastrofes),
    ];
});
