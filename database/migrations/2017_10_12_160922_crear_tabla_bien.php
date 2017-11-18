<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaBien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id');
            $table->integer('centro_acopio_id');
            $table->integer('medicion_id');
            $table->string('tipo', 30);
            $table->integer('cantidad');

            $table->foreign('centro_acopio_id')->references('id')->on('centro_acopios')->onDelete('cascade');
            $table->foreign('medicion_id')->references('id')->on('medicions')->onDelete('cascade');
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
        Schema::dropIfExists('biens');
    }
}
