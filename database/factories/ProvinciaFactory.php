<?php

use Faker\Generator as Faker;

$factory->define(App\Provincia::class, function (Faker $faker) {
    return [
        'region_id' =>  random_int(\DB::table('regiones')->min('id'), \DB::table('regiones')->max('id')),
        'nombre' => $faker->street_name(),
    ];
});
