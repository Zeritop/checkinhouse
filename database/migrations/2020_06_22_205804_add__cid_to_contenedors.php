<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCidToContenedors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('contenedors', function(Blueprint $table) {
        $table->text('cid')->nullable()->after('nombre_taller_contenedor');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('contenedors', function(Blueprint $table) {
        $table->dropColumn('cid');
      });
    }
}
