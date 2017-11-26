<?php

use Illuminate\Database\Seeder;

class RegistroActividadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\RegistroActividad::class, 15)->create();
    }
}
