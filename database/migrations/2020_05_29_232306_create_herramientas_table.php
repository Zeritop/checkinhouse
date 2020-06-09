<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHerramientasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('herramientas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_her')->unique();
            $table->string('nom_her');
            $table->string('alias_her');
            $table->string('vida_her');
            $table->string('marca_her');
            $table->string('prioridad_her');
            $table->string('foto_her');
            $table->string('cod_taller_her');
            $table->string('cod_contenedor_her');
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
        Schema::dropIfExists('herramientas');
    }
}
