<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTMToHerramientas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('herramientas', function(Blueprint $table) {
        $table->integer('id_tipo_herramienta')->after('foto_her');
        $table->string('medidas_her')->after('id_tipo_herramienta');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('herramientas', function(Blueprint $table) {
        $table->dropColumn('id_tipo_herramienta');
        $table->dropColumn('medidas_her');
      });
    }
}
