<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contrat_location;
use App\Fournisseur;
use App\Voiture;

class Contrat_locationsController extends Controller
{
    //
	
	     public function index()
    {
        //
		$contrat_locations = 	Contrat__location::all();

        // après yretouni l view table_fournisseurs w yzidelha la variables fournisseurs
        // b la fct with()
		      
        return view('table_contrat_locations')->with('contrat__locations',$_locations) ;
    }


    public function create()
    { 
       // $Contrat_assurences: =  Contrat_assurences:::all();
		$fournisseurs = Fournisseur::all();
		$voitures = Voiture::all();
		//dd($assurences);
		return view('ajouter_contart_location')	
		->with('voitures',$voitures ) 
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
		      $contrat_locations= Contrat_location ::create([
          
           'id_voiture' => $request->id_voiture,
            'id_fournisseur' => $request->id_fournisseur,
           'cout_location' => $request->cout_location,
		   
		      'date_contrat_location' => $request->date_contrat_location,
            'date_debut_location' => $request->date_debut_location,
           'date_fin_location' => $request->date_fin_location,
		   'description_contrat_location' => $request->description_contrat_location,
           'photo_contrat_location' => $path
        ]);

        //après ndirou save bech yetsavgarda fi la bdd
         $contrat_locations->save();

  

        //après ndirou save bech yetsavgarda fi la bdd
 

        return redirect()->back();
    }

}