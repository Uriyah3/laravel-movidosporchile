<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regiones = ["Arica y Parinacota", "Tarapacá", "Antofagasta", "Atacama", "Coquimbo", "Valparaíso", "Libertador General Bernardo O'Higgins", "Maule", "BioBío", "La Araucanía", "Los Ríos", "Los Lagos", "Aisén del General Carlos Ibáñez del Campo", "Magallanes y Antártica Chilena", "Región Metropolitana de Santiago"];
        foreach ($regiones as $region) {
        	factory(App\Region::class)->create(['nombre' => $region]);
        }
    }
}
