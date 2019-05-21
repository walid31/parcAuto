<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelle extends Model
{  protected $primaryKey = 'id_modelle';

    protected $fillable=['id_modelle','name_modelle','id_marque','id_categorie'];
   







}
