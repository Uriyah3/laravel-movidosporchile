<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rol_id');
            $table->string('username', 50);
            $table->string('password', 60);
            $table->string('dv', 1);
            $table->integer('rut');
            $table->string('nombre', 50);
            $table->integer('telefono')->nullable();
            $table->string('email', 120);
            $table->timestamps();
            $table->softDeletes();

            $table->unique('rut');
            $table->foreign('rol_id')->references('id')->on('rols')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
