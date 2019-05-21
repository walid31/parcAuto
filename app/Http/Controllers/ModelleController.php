<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Marque;
use App\Modelle;

class ModelleController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$modelles = 	Modelle ::all();

        // après yretouni l view table_fournisseurs w yzidelha la variables fournisseurs
        // b la fct with()
		        $categories = Categorie::all();
		$marques = Marque::all();
        return view('table_modelles')->with('modelles',$modelles)->with('marques',$marques) ->with('categories',$categories) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
		$marques = Marque::all();
		return view('ajouter_modelle')
										->with('marques',$marques) ->with('categories',$categories) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		      $modelle = Modelle::create([
            //name_fournisseur par ex howa le nom te3 field fi la bdd
            // $request->nom_fournisseur howa li yjina mel formulaire
			
           'name_modelle' => $request->nom_modelle,
            'id_categorie' => $request->id_categorie,
           'id_marque' => $request->id_marque
        ]);

        //après ndirou save bech yetsavgarda fi la bdd
        $modelle->save();

  

        //après ndirou save bech yetsavgarda fi la bdd
 

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($id)
    {        $categories = Categorie::all();
		$marques = Marque::all();
        // trouver le modelle a modifier
        $modelles = Modelle::where('id_modelle','=',$id)->firstOrFail();
        //retourner le view de modification
        return view('editer_modelles')->with('modelles',$modelles) 
		->with('marques',$marques) ->with('categories',$categories);
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
//        dd($request);
        //trouver le modelle
        $modelle = Modelle::where('id_modelle','=',$id)->firstOrFail();
        //mise a jour des informations
        $modelle = $modelle->update([
            'name_modelle' => $request->nom_modelle,
            'id_categorie' => $request->id_categorie,
           'id_marque' => $request->id_marque
        ]);

        return redirect()->back('');
    }
    public function destroy($id)
    {
        // trouver le modelle qui a le id
        $modelle = Modelle::where('id_modelle','=',$id)->firstOrFail();
        //le supprimer
        $modelle->delete();

        //retour vers la page
        return redirect()->back();
    }
}
