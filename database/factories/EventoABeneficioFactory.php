<?php

use Faker\Generator as Faker;

$factory->define(App\EventoABeneficio::class, function (Faker $faker) {
    return [
        'locacion_id' => random_int(\DB::table('locacions')->min('id'), \DB::table('locacions')->max('id')),
        'fecha' => $faker->past_date(end_date='-30d',tzinfo=None),
        'horario_inicio' => $faker -> time(pattern="%H:%M:%S", end_datetime=None),//esto está correcto?
        'horario_termino' => $faker -> time(pattern="%H:%M:%S", end_datetime=None),//esto está correcto?
        'descripcion' => $faker->text(),
        'objetivos' => $faker->text(),
        'actividades' => $faker->text(),
        'created' =>  $faker->date_time_this_year(before_now=True, after_now=False, tzinfo=None),
        'modified' => $faker->date_time_this_year(before_now=True, after_now=False, tzinfo=None),
    ];
});
