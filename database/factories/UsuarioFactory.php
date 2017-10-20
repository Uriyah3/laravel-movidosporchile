<?php

use Faker\Generator as Faker;

$factory->define(App\Usuario::class, function (Faker $faker) {
    static $password;
    $numeros= ("1","2","3","4","5","6","7","8","9");
    return [
        'rol_id' =>  random_int(\DB::table('rols')->min('id'), \DB::table('rols')->max('id')),
        'username' =>$faker->unique()->name,
        'password' => $password ?: $password = bcrypt('secret'),
        'rut' => $faker->unique()->random_int(9, 9);
        'nombre' => $faker->unique()->name,
        'telefono' => random_int(8, 8),
        'email' => $faker->unique()->safeEmail,
    ];
});
