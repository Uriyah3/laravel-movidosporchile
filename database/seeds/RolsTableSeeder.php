<?php

use Illuminate\Database\Seeder;

class RolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ["Gobierno","Admin","Organización","Usuario"];
        foreach ($roles as $rol) {
        	factory(App\Rol::class)->create(['nombre' => $rol]);
        }
    }
}
