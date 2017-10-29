<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCentroAcopio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centro_acopios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id');
            $table->integer('locacion_id');
            $table->integer('estado_id');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->text('objetivos');
            $table->text('descripcion')->nullable();


            $table->timestamps();
            $table->foreign('locacion_id')->references('id')->on('locacions')->onDelete('cascade');
            $table->foreign('estado_id')->references('id')->on('estados')->onDelete('cascade');
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centro_acopios');
    }
}
