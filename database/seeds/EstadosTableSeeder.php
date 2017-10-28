<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados = ["Listo", "Esperando", "Completo"];
        foreach ($estados as $estado) {
        	factory(App\Estado::class)->create(['nombre' => $estado]);
        }
    }
}
