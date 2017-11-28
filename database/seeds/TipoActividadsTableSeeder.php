<?php

use Illuminate\Database\Seeder;

class TipoActividadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actividades = ["Ayuda","Coordinaccion","Administracion", "Crear catástrofe", "Ingresar comentario", "Participar en medida"];
        foreach ($actividades as $actividad) {
        	factory(App\TipoActividad::class)->create(['nombre' => $actividad]);
        }
    }
}
