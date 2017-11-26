<?php

use Illuminate\Database\Seeder;

class ProviniciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$provincias = [[1, "Arica"], [1, "Parinacota"], [2, "Iquique"], [2, "Tamarugal"], [3, "Antofagasta"], [3, "El Loa"], [3, "Tocopilla"], [4, "Copiapó"], [4, "Chañaral"], [4, "Huasco"], [5, "Elqui"], [5, "Choapa"], [5, "Limarí"], [6, "Valparaíso"], [6, "Isla de Pascua"], [6, "Los Andes"], [6, "Petorca"], [6, "Quillota"], [6, "San Antonio"], [6, "San Felipe de Aconcagua"], [6, "Marga Marga"], [7, "Cachapoal"], [7, "Cardenal Caro"], [7, "Colchagua"], [8, "Talca"], [8, "Cauquenes"], [8, "Curicó"], [8, "Linares"], [9, "Concepción"], [9, "Arauco"], [9, "Biobío"], [9, "Ñuble"], [10, "Cautín"], [10, "Malleco"], [11, "Valdivia"], [11, "Ranco"], [12, "Llanquihue"], [12, "Chiloé"], [12, "Osorno"], [12, "Palena"], [13, "Coyhaique"], [13, "Aisén"], [13, "Capitán Prat"], [13, "General Carrera"], [14, "Magallanes"], [14, "Antártica Chilena"], [14, "Tierra del Fuego"], [14, "Ultima Esperanza"], [15, "Santiago"], [15, "Cordillera"], [15, "Chacabuco"], [15, "Maipo"], [15, "Melipilla"], [15, "Talagante"] ];
		foreach ($provincias as $provincia) {
			factory(App\Provincia::class)->create([
				'nombre' => $provincia[1],
				'region_id' => $provincia[0]
			]);
		}
        //factory(App\Provincia::class, 10)->create();
    }
}
