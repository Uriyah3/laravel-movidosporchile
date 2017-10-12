<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaVoluntario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voluntarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('voluntariado_id');
            $table->boolean('finalizado')->default(FALSE);
            $table->integer('rut');

            $table->foreign('voluntariado_id')->references('id')->on('voluntariados')->onDelete('cascade');
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
        Schema::dropIfExists('voluntarios');
    }
}
