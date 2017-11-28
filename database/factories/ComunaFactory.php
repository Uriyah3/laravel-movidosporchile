<?php

use Faker\Generator as Faker;

$factory->define(App\Comuna::class, function (Faker $faker) {
    return [
    	'provincia_id' => App\Provincia::all()->random()->id,
    	'nombre' => $faker->city,
    ];
});
