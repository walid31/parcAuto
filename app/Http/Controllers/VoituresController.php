<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voiture;
use App\Modelle;

use App\Carburent;
class VoituresController extends Controller
{
    //
	public function index()
    {
        //yjib ge3 les marque b all() w y7ethoum fi $carburents
        $voitures = voiture::all();

        // après yretouni l view table_carburents w yzidelha la variables carburents
        // b la fct with()
        return view('table_voitures')->with('voitures',$voitures);
    }
		public function index2($id)
    {
        //yjib ge3 les marque b all() w y7ethoum fi $carburents
     
  $voitures = Voiture::where('id_voiture','=',$id)->firstOrFail();
        // après yretouni l view table_carburents w yzidelha la variables carburents
        // b la fct with()
        return view('detais_voiture')->with('voitures',$voitures);
    }
	
	
	 public function edit($id)
    {
        // trouver le marque a modifier
$modelles=Modelle :: all();
$carburents=Carburent :: all();   
        $voitures = Voiture::where('id_voiture','=',$id)->firstOrFail();
        //retourner le view de modification
        return view('editer_voiture')->with('voitures',$voitures)->with('carburents',$carburents)
                                ->with('modelles',$modelles);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  
	
	
				if($request->hasFile('image_voiture')){
			
			$image1 = $request->image_voiture;
			// ya3tilha nom unique
			$postImage1 = time().$image1->getClientOriginalExtension();
			//après ydiplaciha fi hada chemin
			$image1->move('uploads/images/voiture',$postImage1);
			// w ysauvgarder chemin
			$path1 = 'uploads/images/voiture'.$postImage1;
		}else $path1="";
    
			if($request->hasFile('image_grise')){
			
			$image2 = $request->image_voiture;
			// ya3tilha nom unique
			$postImage2 = time().$image2->getClientOriginalExtension();
			//après ydiplaciha fi hada chemin
			$image2->move('uploads/images/voiture',$postImage2);
			// w ysauvgarder chemin
			$path2 = 'uploads/images/carte_grise'.$postImage2;
		}else $path2="";
	
	
	if($request->hasFile('image')){
			
			$image = $request->image;
			// ya3tilha nom unique
			$postImage = time().$image->getClientOriginalExtension();
			//après ydiplaciha fi hada chemin
			$image->move('uploads/images',$postImage);
			// w ysauvgarder chemin
			$path = 'uploads/images/'.$postImage;
		}else $path="";
//        dd($request);
        //trouver le marque
        $voiture = Voiture::where('id_marque','=',$id)->firstOrFail();
        //mise a jour des informations
        $voiture = $voiture->update([
   
'id_voiture'=>$request->code_vehicule,
			'matricule'=>$request->matricule,
			'numero_chasse'=>$request->numero_chasse,
			'id_modelle'=>$request->id_modelle,
			'type_contrat'=>$request->type_contrat,
			'nbr_place'=>$request->nbr_place,
				'nbr_porte'=>$request->nbr_porte,
			'nbr_cheveaux'=>$request->nbr_cheveaux,
			'type_vitesse'=>$request->type_vitesse,
			//'id_carburent'=>$request->id_carburent,
             'valeur'=>$request->cout,
            'voiture' => $path2,
			'cartegrise' => $path2
         
          
        ]);

        return redirect()->back();
    }
    public function destroy($id)
    {
        // trouver le marque qui a le id
        $voiture = Voiture::where('id_voiture','=',$id)->firstOrFail();
        //le supprimer
         $voiture->delete();

        //retour vers la page
        return redirect()->back();
    }
	
	
	
	
	   public function create()
    {
		$modelles=Modelle :: all();
$carburents=Carburent :: all();      
  return view('ajouter_voiture')->with('carburents',$carburents)
                                ->with('modelles',$modelles);

	}
	
	public function search(Request $request)
	{
		 $voitures =Voiture::all()->where($request->check,$request->search);
		 return view('table_voitures')->with('voitures',$voitures);
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // hadi la fonction li t'inseri tuple te3 fournisseur
    public function store(Request $request)
    {
		// yetsti ida kan image
		//dd($request->type_contrat);
		//dd($request->all(),$request->type_contrat);
			
				if($request->hasFile('image_voiture')){
			
			$image1 = $request->image_voiture;
			// ya3tilha nom unique
			$postImage1 = time().'.'.$image1->getClientOriginalExtension();
			//après ydiplaciha fi hada chemin
			$image1->move('uploads/images/',$postImage1);
			// w ysauvgarder chemin
			$path1 = 'uploads/images/'.$postImage1;
		}else $path1="";
			//dd($path1);
			if($request->hasFile('image_grise')){
			
			$image2 = $request->image_grise;
			// ya3tilha nom unique
			$postImage2 = time().'.'.$image2->getClientOriginalExtension();
			//après ydiplaciha fi hada chemin
			$image2->move('uploads/images/',$postImage2);
			// w ysauvgarder chemin
			$path2 = 'uploads/images/'.$postImage2;
		}else $path2="";
		//dd($path2);
    
        // $request fiha ge3 les données li yjouna men formulaire
        $voitures = Voiture::create([
            //name_fournisseur par ex howa le nom te3 field fi la bdd
            // $request->nom_fournisseur howa li yjina mel formulaire
            // $request->nom_fournisseur howa li yjina mel formulaire
			'id_voiture'=>$request->code_vehicule,
			'matricule'=>$request->matricule,
			'numero_chasse'=>$request->numero_chasse,
			'id_modelle'=>$request->id_modelle,
			'type_contrat'=>$request->type_contrat,
			'nbr_place'=>$request->nbr_place,
				'nbr_porte'=>$request->nbr_porte,
			'nbr_cheveaux'=>$request->nbr_cheveaux,
			'type_vitesse'=>$request->type_vitesse,
			'id_carburent'=>$request->id_carburent,
             'valeur'=>$request->cout,
            'photo_voiture' => $path2,
			'carte_grise' => $path2
        ]);




        //après ndirou save bech yetsavgarda fi la bdd
        $voitures->save();

        return redirect()->back();
    }
	
	
	
	
	}
	

