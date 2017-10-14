<?php

use Faker\Generator as Faker;

$factory->define(App\Comentario::class, function (Faker $faker) {
    return [
    	'usuario_id' => random_int(\DB::table('usuarios')->min('id'), \DB::table('usuarios')->max('id')),
    	'descripcion' => $faker->text(),
    	'created' =>  $faker->date_time_this_year(before_now=True, after_now=False, tzinfo=None),
        'modified' => $faker->date_time_this_year(before_now=True, after_now=False, tzinfo=None),
    	        
    ];
});
