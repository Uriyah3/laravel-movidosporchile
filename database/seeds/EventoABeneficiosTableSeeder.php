<?php

use Illuminate\Database\Seeder;

class EventoABeneficiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\EventoABeneficio::class, 10)->create();
    }
}
