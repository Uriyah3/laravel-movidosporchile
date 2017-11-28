<?php

use Illuminate\Database\Seeder;

class VoluntariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Voluntario::class, 60)->create();
    }
}
