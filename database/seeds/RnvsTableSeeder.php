<?php

use Illuminate\Database\Seeder;

class RnvsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Rnv::class, 50)->create();
    }
}
