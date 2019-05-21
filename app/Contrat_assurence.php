<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrat_assurence extends Model
{
 
	protected $primaryKey = 'id_contrat_assurence';

    protected $fillable=['id_contrat_assurence','id_assurence','id_voiture','cout_assurence','date_contrat_assurence',
	'date_debut_assurence','date_fin_assurence',
    'description_contrat_assurence','photo_contrat_assurence'];
 //
}
