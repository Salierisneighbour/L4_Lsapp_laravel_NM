<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedecinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medecins', function (Blueprint $table) {
            $table->bigIncrements('id_medecin');
            $table->string('NomMedecin', 100);
            $table->string('PrenomMedecin', 100);
            $table->string('AdrsMedecin', 200);
            $table->integer('TelMedecin');
            $table->string('email',200);
            $table->string('Sexe', 30);
            $table->date('DateNaissance');
            $table->string('Prestation', 80);
            $table->string('EtatCivil', 30);
            
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
        Schema::dropIfExists('medecins');
    }
}
