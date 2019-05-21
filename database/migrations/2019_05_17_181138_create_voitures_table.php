<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voitures', function (Blueprint $table) {
                     $table->increments('id_voiture');
			
            $table->integer('matricule');
			  $table->integer('carte_grise');
            $table->integer('numero_chasse');
			   $table->integer('id_modelle');
           
		
				   $table->integer('type_contrat');
            $table->integer('nbr_place');
			   $table->integer('nbr_porte');
            $table->integer('nbr_cheveaux');
           $table->integer('type_vitesse');
            $table->integer('id_carburent');
            $table->integer('id_carburentt');
            $table->string('photo_voiture');
			     $table->integer('valeur');
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
        Schema::dropIfExists('voitures');
    }
}
