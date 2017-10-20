<?php

use Faker\Generator as Faker;

$factory->define(App\Locacion::class, function (Faker $faker) {
    return [
        'punto_gx' => random_int(1, 10),
        'punto_gy' => random_int(1, 10),
        'comuna_id' => random_int(\DB::table('comunas')->min('id'), \DB::table('comunas')->max('id')),
    ];
});
