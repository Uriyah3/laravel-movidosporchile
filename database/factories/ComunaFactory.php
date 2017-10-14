<?php

use Faker\Generator as Faker;

$factory->define(App\Comuna::class, function (Faker $faker) {
    return [
    	'provincia_id' => random_int(\DB::table('provincias')->min('id'), \DB::table('provincias')->max('id')),
    	'nombre' => $faker->street_name(),
       
    ];
});
