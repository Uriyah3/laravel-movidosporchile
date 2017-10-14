<?php

use Faker\Generator as Faker;

$factory->define(App\CentroAcopio::class, function (Faker $faker) {
    return [
        
        'locacion_id' => random_int(\DB::table('locacions')->min('id'), \DB::table('locacions')->max('id')),
        'estado_id' => random_int(\DB::table('estados')->min('id'), \DB::table('estados')->max('id')),
        'fecha_inicio' => $faker->past_date(end_date='-30d',tzinfo=None),
        'fecha_termino' => $faker->future_date(end_date='+30d',tzinfo=None),
        'objetivos' => $faker->text(),
        'descripcion' => $faker->text(),
        'created' =>  $faker->date_time_this_year(before_now=True, after_now=False, tzinfo=None),
        'modified' => $faker->date_time_this_year(before_now=True, after_now=False, tzinfo=None),
    ];
});
