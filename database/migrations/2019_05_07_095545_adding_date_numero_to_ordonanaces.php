<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingDateNumeroToOrdonanaces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ordonances', function (Blueprint $table) {
            $table->date('Date');
            $table->string('NumOrdo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ordonances', function (Blueprint $table) {
            $table->dropcolumn('Date');
            $table->dropcolumn('NumOrdo');
        });
    }
}
