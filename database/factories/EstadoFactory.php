<?php

use Faker\Generator as Faker;

$factory->define(App\Estado::class, function (Faker $faker) {
    return [
        'nombre' => $faker->streetName,
        
    ];
});
