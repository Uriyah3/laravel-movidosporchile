<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaComentarioCentroAcopio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario_centro_acopio', function (Blueprint $table) {
            $table->integer('comentario_id');
            $table->integer('centro_acopio_id');

            $table->foreign('comentario_id')->references('id')->on('comentarios')->onDelete('cascade');
            $table->foreign('centro_acopio_id')->references('id')->on('centro_acopios')->onDelete('cascade');

            $table->primary(['comentario_id', 'centro_acopio_id']); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentario_centro_acopio');
    }
}
