<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingForeignkeyConstraintToDemandeRDVS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('demande_r_d_v_s', function (Blueprint $table) {
            $table->unsignedBigInteger('id_patient')->nullable();;
            $table->foreign('id_patient')->references('id_patient')->on('patients')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('demande_r_d_v_s', function (Blueprint $table) {
            //
        });
    }
}
