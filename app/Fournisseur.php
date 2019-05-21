<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    //hadi dernaha parceque raki badalti id w samitih id_fournisseur donc il faut déclari beli badltih
    //sinon khalih id (hadi fel migration')
    protected $primaryKey = 'id_fournisseur';

    protected $fillable=['id_fournisseur','name_fournisseur','email_fournisseur','add_fournisseur'
    ,'tel_fournisseur'];
}
