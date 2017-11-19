<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaVoluntariado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voluntariados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('medida_id');
            $table->integer('locacion_id');
            $table->integer('actividad_voluntariado_id');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->integer('cantidad_voluntarios');
            $table->timestamps();

            $table->foreign('locacion_id')->references('id')->on('locacions')->onDelete('cascade');
            $table->foreign('actividad_voluntariado_id')->references('id')->on('actividad_voluntariados')->onDelete('cascade');
            $table->foreign('medida_id')->references('id')->on('medidas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voluntariados');
    }
}
