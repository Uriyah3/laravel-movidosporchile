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
        $regiones = ["Arica y parinacota","Antofagasta","Tarapaca","Atacama","Coquimbo","Valparaiso","RM","O higgins","Maule","Bio-Bio","la araucana","Los rios","Los lagos","Aysen","Magallanes"];
        foreach ($regiones as $region) {
        	factory(App\Region::class)->create(['nombre' => $region]);
        }
    }
}
