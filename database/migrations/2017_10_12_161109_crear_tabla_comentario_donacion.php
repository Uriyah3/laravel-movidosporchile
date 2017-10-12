<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaComentarioDonacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario_donacion', function (Blueprint $table) {
            $table->integer('comentario_id');
            $table->integer('donacion_id');

            $table->foreign('comentario_id')->references('id')->on('comentarios')->onDelete('cascade');
            $table->foreign('donacion_id')->references('id')->on('donacions')->onDelete('cascade');

            $table->primary(['comentario_id', 'donacion_id']); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentario_donacion');
    }
}
