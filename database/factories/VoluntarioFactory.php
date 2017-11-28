<?php

use Faker\Generator as Faker;

$factory->define(App\Voluntario::class, function (Faker $faker) {
    $date = $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now');
    return [
    	'usuario_id' => App\Usuario::where('rol_id', 4)->get()->random()->id,
    	'voluntariado_id' => App\Voluntariado::aprobado()->get()->random()->id,
    	'finalizado' => $faker->boolean,
    	'created_at' => $date,
        'updated_at' => $date,
    ];
});
