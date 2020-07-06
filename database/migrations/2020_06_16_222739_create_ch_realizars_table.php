<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChRealizarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ch_realizars', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('chbx1')->nullable();
            $table->boolean('chbx2')->nullable();
            $table->boolean('chbx3')->nullable();
            $table->boolean('chbx4')->nullable();
            $table->boolean('chbx5')->nullable();
            $table->boolean('chbx6')->nullable();
            $table->boolean('chbx7')->nullable();
            $table->boolean('chbx8')->nullable();
            $table->boolean('chbx9')->nullable();
            $table->boolean('chbx10')->nullable();
            $table->boolean('chbx11')->nullable();
            $table->boolean('chbx12')->nullable();
            $table->boolean('chbx13')->nullable();
            $table->boolean('chbx14')->nullable();
            $table->boolean('chbx15')->nullable();
            $table->boolean('chbx16')->nullable();
            $table->boolean('chbx17')->nullable();
            $table->boolean('chbx18')->nullable();
            $table->boolean('chbx19')->nullable();
            $table->boolean('chbx20')->nullable();
            $table->string('titulo_gen_real');
            $table->string('patente_real');
            $table->string('rut_real');
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
        Schema::dropIfExists('ch_realizars');
    }
}
