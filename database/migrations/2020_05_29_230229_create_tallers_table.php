<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTallersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tallers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_taller')->unique();
            $table->string('nombre_taller');
            $table->string('dir_taller');
            $table->string('cap_taller');
            $table->integer('tel_taller');
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
        Schema::dropIfExists('tallers');
    }
}
