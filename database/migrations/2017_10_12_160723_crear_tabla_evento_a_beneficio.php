<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEventoABeneficio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento_a_beneficios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('medida_id');
            $table->integer('locacion_id');
            $table->date('fecha');
            $table->time('horario_inicio');
            $table->time('horario_termino');
            $table->text('actividades');
            $table->timestamps();

            $table->foreign('locacion_id')->references('id')->on('locacions')->onDelete('cascade');
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
        Schema::dropIfExists('evento_a_beneficios');
    }
}
