<?php

use Faker\Generator as Faker;

$factory->define(App\ActividadVoluntariado::class, function (Faker $faker) {
    return [
    	/*'id' => random_int(\DB::table('ActividadVoluntariados')->min('id'), \DB::table('ActividadVoluntariados')->max('id')), */

        'nombre' => $faker->street_name(),
,    ];
});
