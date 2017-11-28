<?php

use Illuminate\Database\Seeder;

class MedicionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mediciones = ["Kilogramos","Litros","Unidades","Otro"];
        foreach ($mediciones as $medicion) {
        	factory(App\Medicion::class)->create(['nombre' => $medicion]);
        }
    }
}
