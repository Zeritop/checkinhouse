<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVlvpToCatservs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cat_servs', function (Blueprint $table) {
            $table->boolean('vl')->default(false);
            $table->boolean('vp')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cat_servs', function (Blueprint $table) {
            $table->dropColumn('vl');
            $table->dropColumn('vp');
        });
    }
}
