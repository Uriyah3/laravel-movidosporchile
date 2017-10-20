<?php

use Faker\Generator as Faker;

$factory->define(App\RegistroActividad::class, function (Faker $faker) {
    return [
        'tipo_actividad_id' => random_int(\DB::table('tipo_actividads')->min('id'), \DB::table('tipo_actividads')->max('id')),
    ];
});
