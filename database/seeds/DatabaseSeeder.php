<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
	        RolsTableSeeder::class,
			UsuariosTableSeeder::class,
			PermisosTableSeeder::class,
			PermisoRolTableSeeder::class,
			TipoCatastrofesTableSeeder::class,
			RegionsTableSeeder::class,
			ProviniciasTableSeeder::class,
			ComunasTableSeeder::class,
			CatastrofesTableSeeder::class,
			EventoABeneficiosTableSeeder::class,
			TipoActividadsTableSeeder::class,
			RegistroActividadsTableSeeder::class,
			ActividadVoluntariadosTableSeeder::class,
			VoluntariadosTableSeeder::class,
			VoluntariosTableSeeder::class,
			RnvsTableSeeder::class,
			EstadosTableSeeder::class,
			CentroAcopiosTableSeeder::class,
			MedicionsTableSeeder::class,
			BiensTableSeeder::class,
			DonacionsTableSeeder::class,
			DepositosTableSeeder::class,
			GastosTableSeeder::class,
			ComentariosTableSeeder::class,
	    ]);
    }
}
