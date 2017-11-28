<?php

use Illuminate\Database\Seeder;

class PermisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = ["permiso1", "permiso2", "permiso3", "permiso4", "permiso5", "permiso6"];
        foreach ($permisos as $permiso) {
        	factory(App\Permiso::class)->create(['nombre' => $permiso]);
        }
    }
}
