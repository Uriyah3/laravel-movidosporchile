<?php

use Faker\Generator as Faker;

$factory->define(App\Catastrofe::class, function (Faker $faker) {
    return [

      'usuario_id' => App\Usuario::where('rol_id', 1)->get()->random()->id,
      'tipo_catastrofe_id' => App\TipoCatastrofe::all()->random()->id,
      'locacion_id' => factory(App\Locacion::class),
      'descripcion' => $faker->text(),
      'fecha_catastrofe' => $faker->dateTime(),
    ];
});
