<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChGeneradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ch_generadors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_gen')->unique();
            $table->string('tarea1');
            $table->string('tarea2');
            $table->string('tarea3');
            $table->string('tarea4');
            $table->string('tarea5');
            $table->string('tarea6');
            $table->string('tarea7');
            $table->string('tarea8');
            $table->string('tarea9');
            $table->string('tarea10');
            $table->string('tarea11')->nullable();
            $table->string('tarea12')->nullable();
            $table->string('tarea13')->nullable();
            $table->string('tarea14')->nullable();
            $table->string('tarea15')->nullable();
            $table->string('tarea16')->nullable();
            $table->string('tarea17')->nullable();
            $table->string('tarea18')->nullable();
            $table->string('tarea19')->nullable();
            $table->string('tarea20')->nullable();
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
        Schema::dropIfExists('ch_generadors');
    }
}
