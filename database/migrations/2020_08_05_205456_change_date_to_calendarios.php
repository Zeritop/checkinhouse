<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeDateToCalendarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('calendarios', function(Blueprint $table) {
        $table->datetime('start')->change();
        $table->datetime('end')->change();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('calendarios', function(Blueprint $table) {
        $table->dropColumn('start');
        $table->dropColumn('end');
      });
    }
}
