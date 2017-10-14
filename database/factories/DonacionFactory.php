<?php

use Faker\Generator as Faker;

$factory->define(App\Donacion::class, function (Faker $faker) {
    return [
        'cuenta' => $faker -> credit_card_number(card_type=None),
        'fecha_inicio' => $faker->past_date(end_date='-30d',tzinfo=None),
        'fecha_termino' => $faker->future_date(end_date='+30d',tzinfo=None),
        'descripcion' => $faker->text(),
        'objetivos' => $faker->text(),
    	'created' =>  $faker->date_time_this_year(before_now=True, after_now=False, tzinfo=None),
        'modified' => $faker->date_time_this_year(before_now=True, after_now=False, tzinfo=None),
    ];
});
