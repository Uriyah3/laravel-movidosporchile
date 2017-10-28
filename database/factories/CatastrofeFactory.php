<?php

use Faker\Generator as Faker;

$factory->define(App\Catastrofe::class, function (Faker $faker) {
    return [
      
      'usuario_id' => App\Usuario::all()->random()->id,
      'tipo_catastrofe_id' => App\TipoCatastrofe::all()->random()->id,
      'locacion_id' => $factory->create('App\Locacion')->id,
    ];
});
