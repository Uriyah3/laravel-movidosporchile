<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRegistroActividad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_actividads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id');
            $table->integer('tipo_actividad_id');
            $table->timestamps();
            $table->foreign('tipo_actividad_id')->references('id')->on('tipo_actividads')->onDelete('cascade');
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
        Schema::dropIfExists('registro_actividads');
    }
}
