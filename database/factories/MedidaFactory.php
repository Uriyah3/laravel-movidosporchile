<?php

use Faker\Generator as Faker;

$factory->define(App\Medida::class, function (Faker $faker) {
    return [
        'usuario_id' => App\Usuario::where('rol_id', 3)->get()->random()->id,
        'aprobada' => $faker->boolean,
        'objetivos' => $faker->text(),
        'descripcion' => $faker->text(),
    ];
});
