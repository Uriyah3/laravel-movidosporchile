<?php

use Illuminate\Database\Seeder;

class PermisoRolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$roles = App\Rol::all();
        $permisos = App\Permiso::all();

        foreach ($roles as $rol) {
        	$numeroPermisos = 0;
        	foreach ($permisos as $permiso) {
        		$agregar = random_int(1,3);
        		if($agregar == 1) {
        			DB::table('permiso_rol')->insert([
        				'permiso_id' => $permiso->id,
        				'rol_id' => $rol->id
        			]);
        			$numeroPermisos++;
        		}        		
        	}
        	if($numeroPermisos == 0) {
        		DB::table('permiso_rol')->insert([
    				'permiso_id' => $permisos->random()->id,
    				'rol_id' => $rol->id
    			]);
        	}
        }
    }
}
