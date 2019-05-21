<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contrat_assurence ;
use App\Assurence;
use App\Voiture;
class Contrat_assurencesController extends Controller
{
     public function index()
    {
        //
		$contrat_assurences = 	Contrat_assurence::all();

        // après yretouni l view table_fournisseurs w yzidelha la variables fournisseurs
        // b la fct with()
		      
        return view('table_contrat_assurences')->with('contrat_assurences',$contrat_assurences) ;
    }


    public function create()
    {
       // $Contrat_assurences: =  Contrat_assurences:::all();
		$assurences = Assurence::all();
		$voitures = Voiture::all();
		//dd($assurences);
		return view('ajouter_contart_assurence')	
		->with('voitures',$voitures ) 
		->with('assurences',$assurences) ;
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
		      $contrat_assurences= Contrat_assurence ::create([
          
           'id_voiture' => $request->id_voiture,
            'id_assurence' => $request->id_assurence,
           'cout_assurence' => $request->cout_assurence,
		   
		      'date_contrat_assurence' => $request->date_contrat_assurence,
            'date_debut_assurence' => $request->date_debut_assurence,
           'date_fin_assurence' => $request->date_fin_assurence,
		   'description_contrat_assurence' => $request->description_contrat_assurence,
           'photo_contrat_assurence' => $path
        ]);

        //après ndirou save bech yetsavgarda fi la bdd
         $contrat_assurences->save();

  

        //après ndirou save bech yetsavgarda fi la bdd
 

        return redirect()->back();
    }



}
