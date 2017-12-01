<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Usuario::class, 22)->create();
        // Crear usuarios de prueba.
        factory(App\Usuario::class)->create([
        	'rol_id' => 4,
			'username' => 'nicolas',
			'rut' => 19323425,
			'dv' => '9',
			'nombre' => 'Nicolás Mariángel',
			'email' => 'nicolas.mariangel@usach.cl',
			'deleted_at' => null,
        ]);

        factory(App\Usuario::class)->create([
        	'rol_id' => 3,
			'username' => 'isamar',
			'rut' => 12312312,
			'dv' => '3',
			'nombre' => 'Isamar Hernández',
			'email' => 'isamar.hernandez@usach.cl',
			'deleted_at' => null,
        ]);

        factory(App\Usuario::class)->create([
        	'rol_id' => 1,
			'username' => 'jesus',
			'rut' => 18977642,
			'dv' => 'k',
			'nombre' => 'Jesus Henriquez',
			'email' => 'jesus.henriquez@usach.cl',
			'deleted_at' => null,
        ]);
    }
}
