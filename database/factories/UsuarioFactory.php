<?php

use Faker\Generator as Faker;

$factory->define(App\Usuario::class, function (Faker $faker) {
    static $password;
    return [
        'rol_id' =>  App\Rol::all()->random()->id,
        'username' =>$faker->unique()->userName,
        'password' => $password ?: $password = bcrypt('secret'),
        'rut' => $faker->unique()->randomNumber($nbDigits = 9),
        'nombre' => $faker->name,
        'telefono' => $faker->randomNumber($nbDigits = 8),
        'email' => $faker->safeEmail,
    ];
});
