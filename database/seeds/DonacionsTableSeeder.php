<?php

use Illuminate\Database\Seeder;

class DonacionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Donacion::class, 5)->create([
        	'titular' => 'Movidos x Chile',
			'rut_destinatario' => '81.496.800-6',
			'nombre_banco' => 'BCI',
			'tipo_cuenta' => 'Cta. Corriente',
			'cuenta' => '11475498',
        ]);
    }
}
