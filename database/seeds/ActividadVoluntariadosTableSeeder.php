<?php

use Illuminate\Database\Seeder;

class ActividadVoluntariadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actividades = ["actividad1", "actividad2", "actividad3"];
        foreach ($actividades as $actividad) {
        	factory(App\ActividadVoluntariado::class)->create(['nombre' => $actividad]);
        }
    }
}
