<?php

use Illuminate\Database\Seeder;

class VoluntariadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Voluntariado::class, 10)->create();
    }
}
