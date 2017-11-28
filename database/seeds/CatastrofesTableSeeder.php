<?php

use Illuminate\Database\Seeder;

class CatastrofesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Catastrofe::class, 20)->create();
    }
}
