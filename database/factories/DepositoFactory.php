<?php

use Faker\Generator as Faker;

$factory->define(App\Deposito::class, function (Faker $faker) {
    return [
        'donacion_id' => random_int(\DB::table('donacions')->min('id'), \DB::table('donacions')->max('id')),
        'nombre' => $faker->street_name(),
        'rut' => App\Usuario::all()->random()->rut,
        'monto' =>  random_int(1, 2000000000),//es el indicado para esto?
    ];
});
