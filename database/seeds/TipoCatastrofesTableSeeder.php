<?php

use Illuminate\Database\Seeder;

class TipoCatastrofesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $catastrofes = ["Terremoto","Tsunami","Incendio","Crisis Humanitaria","Epidemias"];
        foreach ($catastrofes as $catastrofe) {
        	factory(App\TipoCatastrofe::class)->create(['nombre' => $catastrofe]);
        }
    }
}
