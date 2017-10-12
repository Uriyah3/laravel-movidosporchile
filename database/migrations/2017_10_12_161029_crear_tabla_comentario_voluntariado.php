<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaComentarioVoluntariado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario_voluntariado', function (Blueprint $table) {
            $table->integer('comentario_id');
            $table->integer('voluntariado_id');

            $table->foreign('comentario_id')->references('id')->on('comentarios')->onDelete('cascade');
            $table->foreign('voluntariado_id')->references('id')->on('voluntariados')->onDelete('cascade');

            $table->primary(['comentario_id', 'voluntariado_id']); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentario_voluntariado');
    }
}
