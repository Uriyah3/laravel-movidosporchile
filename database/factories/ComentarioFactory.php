<?php

use Faker\Generator as Faker;

$factory->define(App\Comentario::class, function (Faker $faker) {
	$date = $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now');
    return [
    	'medida_id' => App\Medida::where('aprobada', true)->get()->random()->id,
    	'usuario_id' => App\Usuario::all()->random()->id,
    	'descripcion' => $faker->text(),
    	'created_at' => $date,
        'updated_at' => $date,
    ];
});
