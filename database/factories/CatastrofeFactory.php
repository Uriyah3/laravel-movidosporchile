<?php

use Faker\Generator as Faker;

$factory->define(App\Catastrofe::class, function (Faker $faker) {
    return [
      
      'usuario_id' => random_int(\DB::table('usuarios')->min('id'), \DB::table('usuarios')->max('id')),
      'tipo_catastrofe_id' => random_int(\DB::table('tipo_catastrofes')->min('id'), \DB::table('tipo_catastrofes')->max('id')),
      'locacion_id' => random_int(\DB::table('locacions')->min('id'), \DB::table('locacions')->max('id')),
    ];
});
