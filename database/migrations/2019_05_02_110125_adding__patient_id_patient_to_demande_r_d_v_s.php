<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingPatientIdPatientToDemandeRDVS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('demande_r_d_v_s', function (Blueprint $table) {
            //
            $table->string('Patient');
            $table->unsignedBigInteger('id_patient');
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
            $table->dropColumn('Patient');
            $table->dropColumn('id_patient');
        });
    }
}
