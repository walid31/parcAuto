<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratAssurencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
    {
        Schema::create('contrat_assurences', function (Blueprint $table) {
                 $table->increments('id_contrat_assurence');
            $table->integer('id_assurence');
			$table->integer('id_code_voiture');
            $table->integer('id_voiture');
				 $table->integer('cout_assurence');
          $table->date('date_contrat_assurence');
		  $table->date('date_debut_assurence');
		  $table->date('date_fin_assurence');
		  $table->string('description_contrat_assurence');
		  $table->string('photo_contrat_assurence');
            $table->rememberToken();
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
        Schema::dropIfExists('contrat_assurences');
    }
}
