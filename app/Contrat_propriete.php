<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrat_propriete extends Model
{
	protected $primaryKey = 'id_contrat_propriete';
	
	  protected $fillable=['id_contrat_propriete','id_fournisseur','id_voiture','cout_propriete','date_contrat_propriete',
    'description_contrat_propriete','photo_contrat_propriete'];
    //  

 //
}
