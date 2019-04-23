<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrisEnChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pris_en_charges', function (Blueprint $table) {
            $table->bigIncrements('id');
                       
            $table->string('Type',40);
            $table->date('DateDebut');
            $table->date('DateFin');
            $table->unsignedBigInteger('id_medecin');
            $table->unsignedBigInteger('id_patient');
            $table->foreign('id_patient')->references('id_patient')->on('patients')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_medecin')->references('id_medecin')->on('medecins')->onUpdate('cascade')->onDelete('cascade');
        
           
            
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
        Schema::dropIfExists('pris_en_charges');
    }
}
