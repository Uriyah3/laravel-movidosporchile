<?php

use Faker\Generator as Faker;

$factory->define(App\Medida::class, function (Faker $faker) {
    return [
        'usuario_id' => App\Usuario::all()->random()->id,
        'aprobada' => $faker->boolean,
        'objetivos' => $faker->text(),
        'descripcion' => $faker->text(),
    ];
});
