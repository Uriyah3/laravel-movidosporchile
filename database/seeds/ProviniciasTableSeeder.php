<?php

use Illuminate\Database\Seeder;

class ProviniciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Provincia::class, 10)->create();
    }
}
