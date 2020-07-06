<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddComentarioToChRealizars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('ch_realizars', function(Blueprint $table) {
        $table->text('comentario_real')->nullable()->after('titulo_gen_real');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('ch_realizars', function(Blueprint $table) {
        $table->dropColumn('comentario_real');
      });
    }
}
