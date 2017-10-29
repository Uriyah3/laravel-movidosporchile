<?php

use Illuminate\Database\Seeder;

class TipoMedidasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medidas = ["medida1","medida2","medida3","medida4"];
        foreach ($medidas as $medida) {
        	factory(App\TipoMedida::class)->create(['nombre' => $medida]);
        }
    }
}
