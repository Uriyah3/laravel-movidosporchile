<?php

use Illuminate\Database\Seeder;

class ComentariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$comments = 20;
        factory(App\Comentario::class, $comments)->create();

        for ($i=1; $i <= $comments; $i++) { 
        	$selecter = random_int(1, 4);
        	if($selecter == 1) {
        		DB::table('comentario_voluntariado')->insert([
        			'comentario_id' => $i,
        			'voluntariado_id' => App\Voluntariado::all()->random()->id
        		]);
        	} elseif ($selecter == 2) {
        		DB::table('comentario_evento_a_beneficio')->insert([
        			'comentario_id' => $i,
        			'evento_a_beneficio_id' => App\EventoABeneficio::all()->random()->id
        		]);
        	} elseif ($selecter == 3) {
        		DB::table('comentario_centro_acopio')->insert([
        			'comentario_id' => $i,
        			'centro_acopio_id' => App\CentroAcopio::all()->random()->id
        		]);
        	} elseif ($selecter == 4) {
        		DB::table('comentario_donacion')->insert([
        			'comentario_id' => $i,
        			'donacion_id' => App\Donacion::all()->random()->id
        		]);
        	}
        }
    }
}
