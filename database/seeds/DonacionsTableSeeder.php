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
        factory(App\Donacion::class, 10)->create();
    }
}
