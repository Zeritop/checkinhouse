<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContenedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenedors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_contenedor');
            $table->string('nombre_contenedor');
            $table->string('capacidad_contenedor');
            $table->string('nombre_taller_contenedor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contenedors');
    }
}
