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
        $mediciones = ["medicion1","medicion2","medicion3","medicion4"];
        foreach ($mediciones as $medicion) {
        	factory(App\Medicion::class)->create(['nombre' => $medicion]);
        }
    }
}
