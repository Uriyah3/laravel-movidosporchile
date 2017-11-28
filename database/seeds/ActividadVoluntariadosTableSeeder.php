<?php



use Illuminate\Database\Seeder;

class ActividadVoluntariadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actividades = ["Ambiental", "Comunitario", "Cultural", "Deportivo", "Educativo", "Internacional", "Ocio y tiempo libre", "Protección civil", "Socio-sanitario"];
        foreach ($actividades as $actividad) {
        	factory(App\ActividadVoluntariado::class)->create(['nombre' => $actividad]);
        }
    }
}
