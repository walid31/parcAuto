<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
    {
        Schema::create('contrat_locations', function (Blueprint $table) {
              $table->increments('id_contrat_location');
            $table->integer('id_fournisseur');
			$table->integer('id_code_voiture');
            $table->integer('id_voiture');
				 $table->integer('cout_location');
          $table->date('date_contrat_location');
		  $table->date('date_debut_location');
		  $table->date('date_fin_location');
		  $table->string('description_contrat_location');
		  $table->string('photo_contrat_location');
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
        Schema::dropIfExists('contrat_locations');
    }
}
