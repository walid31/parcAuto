<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contrat_propriete;
use App\Fournisseur;
use App\Voiture;

class Contrat_proprietesController extends Controller
{
	 public function index()
    {
        //
		contrat_proprietes = 	Contrat_propriete::all();

        // après yretouni l view table_fournisseurs w yzidelha la variables fournisseurs
        // b la fct with()
		      
        return view('table_contrat_assurences')->with('contrat_assurences',$contrat_assurences) ;
    }


    public function create()
    {
       // $Contrat_assurences: =  Contrat_assurences:::all();
		$fournisseurs = Fournisseur::all();
		$voitures = Voiture::all();
		//dd($assurences);
		return view('ajouter_contart_propriete')	
		->with('voitures',$voitures) 
		->with('fournisseurs',$fournisseurs) ;
    }
	
	
	
	
	
	
	
	
	    public function store(Request $request)
    {
        //  
		if($request->hasFile('image')){
			
			$image = $request->image;
			// ya3tilha nom unique
			$postImage = time().$image->getClientOriginalExtension();
			//après ydiplaciha fi hada chemin
			$image->move('uploads/images',$postImage);
			// w ysauvgarder chemin
			$path = 'uploads/images/'.$postImage;
		}else $path="";
		      $contrat_proprietes= Contrat_propriete::create([
          
           'id_voiture' => $request->id_voiture,
            'id_fournisseur' => $request->id_fournisseur,
           'cout_propriete' => $request->cout_propriete,
		   
		      'date_contrat_propriete' => $request->date_contrat_propriete,
   
		   'description_contrat_propriete' => $request->description_contrat_propriete,
           'photo_contrat_propriete' => $path
        ]);

        //après ndirou save bech yetsavgarda fi la bdd
         $contrat_proprietes->save();

  

        //après ndirou save bech yetsavgarda fi la bdd
 

        return redirect()->back();
    }


    //
}
