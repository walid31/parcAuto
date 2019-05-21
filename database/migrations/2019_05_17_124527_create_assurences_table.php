<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssurencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assurences', function (Blueprint $table) {
           
   $table->increments('id_assurences');
          
             $table->string('name_assurence');
            $table->string('email_assurence');
            $table->string('add_assurence');
            $table->integer('tel_assurence');
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
        Schema::dropIfExists('assurences');
    }
}
