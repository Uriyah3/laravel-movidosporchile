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
            $table->integer('centro_acopio_id');
            $table->integer('tipo_medida_id');
            $table->string('tipo', 30);
            $table->integer('cantidad');
            $table->integer('rut')->nullable();

            $table->foreign('centro_acopio_id')->references('id')->on('centro_acopios')->onDelete('cascade');
            $table->foreign('tipo_medida_id')->references('id')->on('tipo_medidas')->onDelete('cascade');
            $table->foreign('rut')->references('rut')->on('usuarios')->onDelete('cascade');
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
