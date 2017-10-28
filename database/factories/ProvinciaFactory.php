<?php

use Faker\Generator as Faker;

$factory->define(App\Provincia::class, function (Faker $faker) {
    return [
        'region_id' =>  App\Region::all()->random()->id,
        'nombre' => $faker->state,
    ];
});
