<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDonacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('medida_id');
            $table->integer('usuario_id');
            $table->string('titular', 60);
            $table->string('rut_destinatario', 12);
            $table->string('nombre_banco', 40);
            $table->string('tipo_cuenta', 20);
            $table->string('cuenta', 30);
            $table->date('fecha_inicio');
            $table->date('fecha_termino');

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
        Schema::dropIfExists('donacions');
    }
}
