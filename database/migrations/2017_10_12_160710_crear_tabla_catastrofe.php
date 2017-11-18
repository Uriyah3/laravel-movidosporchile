<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCatastrofe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catastrofes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id');
            $table->integer('tipo_catastrofe_id');
            $table->integer('locacion_id');
            $table->text('descripcion');
            $table->timestamp('fecha_catastrofe');

            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('tipo_catastrofe_id')->references('id')->on('tipo_catastrofes')->onDelete('cascade');
            $table->foreign('locacion_id')->references('id')->on('locacions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catastrofes');
    }
}
