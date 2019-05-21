<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{ 
	  protected $primaryKey = 'id_marque';

    protected $fillable=['id_marque','name_marque','logo'];
    //


}