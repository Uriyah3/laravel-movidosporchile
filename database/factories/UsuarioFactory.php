<?php

use Faker\Generator as Faker;

$factory->define(App\Usuario::class, function (Faker $faker) {
    static $password;
    return [
        'rol_id' =>  App\Rol::all()->random()->id,
        'username' =>$faker->unique()->userName,
        'password' => $password ?: $password = bcrypt('secret'),
        'rut' => $faker->unique()->numberBetween($min = 1000000, $max = 20000000),
        'dv' => $faker->randomDigitNotNull,
        'nombre' => $faker->name,
        'telefono' => $faker->numberBetween($min = 10000000, $max = 99999999),
        'email' => $faker->safeEmail,
        'deleted_at' => $faker->optional($weight = 0.2)->dateTime(),
    ];
});
