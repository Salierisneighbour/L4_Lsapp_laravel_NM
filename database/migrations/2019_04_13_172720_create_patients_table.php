<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id_patient');
            $table->string('NomPatient', 100);
            $table->string('PrenomPatient', 100);
            $table->string('AdrsPatient', 200);
            $table->string('email',200);
            $table->string('TelPatient',20);
            $table->string('Sexe', 30);
            $table->date('DateNaissance');
            $table->string('Profession', 50);
            $table->string('EtatCivil', 30);
            $table->string('Assurance', 30);
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
        Schema::dropIfExists('patients');
    }
}
