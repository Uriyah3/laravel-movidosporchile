<?php

use Faker\Generator as Faker;

$factory->define(App\Voluntariado::class, function (Faker $faker) {
    return [
        'locacion_id' => 'locacion_id' => random_int(\DB::table('locacions')->min('id'), \DB::table('locacions')->max('id')),
		'actividad_voluntariado_id' => 'locacion_id' => random_int(\DB::table('actividad_voluntariados')->min('id'), \DB::table('actividad_voluntariados')->max('id')),
		'fecha_inicio' => $faker->past_date(end_date='-30d',tzinfo=None),
        'fecha_termino' => $faker->future_date(end_date='+30d',tzinfo=None),
		'cantidad_voluntarios'=> random_int(0,100000),
		'objetivos' => $faker->text(),
        'descripcion' => $faker->text(),
    ];
});
