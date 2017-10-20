<?php

use Faker\Generator as Faker;
$catastrofes = ("Terremoto","Tsunami","Incendio","Crisis Humanitaria","Epidemias");
$factory->define(App\TipoCatastrofe::class, function (Faker $faker) {
    return [
        'nombre' => array_rand($catastrofes,1);
    ];
});
