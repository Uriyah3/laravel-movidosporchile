<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaLocacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comuna_id');
            $table->float('latitude', 10, 10);
            $table->float('longitude', 10, 10);
            $table->foreign('comuna_id')->references('id')->on('comunas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locacions');
    }
}
