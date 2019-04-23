<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOccupeChambresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occupe_chambres', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            
            $table->date('DateDebutOccup');
            $table->date('DateFinOccup');
            $table->unsignedBigInteger('id_chambre');
            $table->unsignedBigInteger('id_patient');
            $table->foreign('id_patient')->references('id_patient')->on('patients')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_chambre')->references('id_chambre')->on('chambres')->onUpdate('cascade')->onDelete('cascade');
        
           
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
        Schema::dropIfExists('occupe_chambres');
    }
}
