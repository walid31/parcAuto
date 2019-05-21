<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assurence extends Model
{
    //
	 protected $primaryKey = 'id_assurences';

    protected $fillable=['id_assurences','name_assurence','email_assurence','add_assurence'
    ,'tel_assurence']; 
}
