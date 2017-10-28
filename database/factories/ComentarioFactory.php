<?php

use Faker\Generator as Faker;

$factory->define(App\Comentario::class, function (Faker $faker) {
    return [
    	'usuario_id' => App\Usuario::all()->random()->id,
    	'descripcion' => $faker->text(),
        'created' =>  $faker->dateTimeThisYear(),
        'modified' => $faker->dateTimeThisYear(),
    	        
    ];
});
