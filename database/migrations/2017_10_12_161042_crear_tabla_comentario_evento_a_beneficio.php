<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaComentarioEventoABeneficio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario_evento_a_beneficio', function (Blueprint $table) {
            $table->integer('comentario_id');
            $table->integer('evento_a_beneficio_id');

            $table->foreign('comentario_id')->references('id')->on('comentarios')->onDelete('cascade');
            $table->foreign('evento_a_beneficio_id')->references('id')->on('evento_a_beneficios')->onDelete('cascade');

            $table->primary(['comentario_id', 'evento_a_beneficio_id']); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentario_evento_a_beneficio');
    }
}
