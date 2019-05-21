<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratProprietesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
    {
        Schema::create('contrat_proprietes', function (Blueprint $table) {
                     $table->increments('id_contrat_propriete');
            $table->integer('id_fournisseur');
			$table->integer('id_code_voiture');
            $table->integer('id_voiture');
			 $table->integer('cout_propriete');
          $table->date('date_contrat_propriete');
		  $table->date('date_debut_propriete');
		  $table->date('date_fin_propriete');
		  $table->string('description_contrat_propriete');
		  $table->string('photo_contrat_propriete');
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
        Schema::dropIfExists('contrat_proprietes');
    }
}
