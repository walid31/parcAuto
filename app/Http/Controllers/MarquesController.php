<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marque;
class MarquesController extends Controller
{
public function index()
    {
        //yjib ge3 les marque b all() w y7ethoum fi $carburents
        $marques = Marque::all();

        // après yretouni l view table_carburents w yzidelha la variables carburents
        // b la fct with()
        return view('table_marques')->with('$marques',$marques);
    }
	
	
	
	 public function edit($id)
    {
        // trouver le marque a modifier
        $marques = Marque::where('id_marque','=',$id)->firstOrFail();
        //retourner le view de modification
        return view('editer_marques')->with('marques',$marques);
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
        $marque = Marque::where('id_marque','=',$id)->firstOrFail();
        //mise a jour des informations
        $marque = $marque->update([
            'name_marque' => $request->nom_marque,
			'logo' => $path
         
          
        ]);

        return redirect()->back();
    }
    public function destroy($id)
    {
        // trouver le marque qui a le id
        $marque = marque::where('id_marque','=',$id)->firstOrFail();
        //le supprimer
        $marque->delete();

        //retour vers la page
        return redirect()->back();
    }
	
	
	
	
	   public function create()
    {
        return view('ajouter_marque');
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
		if($request->hasFile('image')){
			
			$image = $request->image;
			// ya3tilha nom unique
			$postImage = time().$image->getClientOriginalExtension();
			//après ydiplaciha fi hada chemin
			$image->move('uploads/images',$postImage);
			// w ysauvgarder chemin
			$path = 'uploads/images/'.$postImage;
		}else $path="";
    
        // $request fiha ge3 les données li yjouna men formulaire
        $marque = Marque::create([
            //name_fournisseur par ex howa le nom te3 field fi la bdd
            // $request->nom_fournisseur howa li yjina mel formulaire
            // $request->nom_fournisseur howa li yjina mel formulaire
            'name_marque' => $request->nom_marque,
            'logo' => $path,
        ]);

        //après ndirou save bech yetsavgarda fi la bdd
        $marque->save();

        return redirect()->back();
    }
	
	
	 
 //
}
