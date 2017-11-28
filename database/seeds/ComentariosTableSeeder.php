<?php

use Illuminate\Database\Seeder;

class ComentariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$comments = 400;
        factory(App\Comentario::class, $comments)->create();
    }
}
