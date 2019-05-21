<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
class CategoriesController extends Controller
{
    // 
	public function index()
    {
        //yjib ge3 les categorie b all() w y7ethoum fi $carburents
        $categories = Categorie::all();

        // après yretouni l view table_carburents w yzidelha la variables carburents
        // b la fct with()
        return view('table_categories')->with('categories',$categories);
    }
	
	
	
	 public function edit($id)
    {
        // trouver le categorie a modifier
        $categorie = Categorie::where('id_categorie','=',$id)->firstOrFail();
        //retourner le view de modification
        return view('editer_categories')->with('categorie',$categorie);
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
        //trouver le categorie
        $categorie = Categorie::where('id_categorie','=',$id)->firstOrFail();
        //mise a jour des informations
        $categorie = $categorie->update([
            'name_categorie' => $request->nom_categorie
         
          
        ]);

        return redirect()->back();
    }
    public function destroy($id)
    {
        // trouver le categorie qui a le id
        $categorie = categorie::where('id_categorie','=',$id)->firstOrFail();
        //le supprimer
        $categorie->delete();

        //retour vers la page
        return redirect()->back();
    }
	
	
	
	
	   public function create()
    {
        return view('ajouter_categorie');
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
        // $request fiha ge3 les données li yjouna men formulaire
        $categorie = Categorie::create([
            //name_fournisseur par ex howa le nom te3 field fi la bdd
            // $request->nom_fournisseur howa li yjina mel formulaire
            'name_categorie' => $request->nom_categorie,
      
        ]);

        //après ndirou save bech yetsavgarda fi la bdd
        $categorie->save();

        return redirect()->back();
    }
	
	
	
	
	
}
