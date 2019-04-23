<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRDVSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_d_v_s', function (Blueprint $table) {
            $table->bigIncrements('id_rdv');
            $table->dateTime('Date_RDV');
            $table->mediumText('Motif'); 
            $table->unsignedBigInteger('id_patient');
            $table->timestamps();
            $table->foreign('id_patient')->references('id_patient')->on('patients')->onDelete('cascade');
            
            
                     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('r_d_v_s');
    }
}
