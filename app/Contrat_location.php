<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrat_location extends Model
{
    //
		protected $primaryKey = 'id_contrat_location';
	
	  protected $fillable=['id_contrat_location','id_fournisseur','id_voiture','cout_location','date_contrat_location','date_debut_location','date_fin_location',''
    'description_contrat_location','photo_contrat_location'];
}
