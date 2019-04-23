<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandeRDVSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_r_d_v_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NomPatient', 100);
            $table->string('PrenomPatient', 100);
            $table->string('AdrsPatient', 200);
            $table->bigInteger('TelPatient');
            $table->string('Sexe', 30);
            $table->string('email',200);
            $table->date('DateNaissance');
            $table->string('Profession', 50);
            $table->string('EtatCivil', 30);
            $table->string('Assurance', 30); 
            $table->mediumText('Motif');  
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
        Schema::dropIfExists('demande_r_d_v_s');
    }
}
