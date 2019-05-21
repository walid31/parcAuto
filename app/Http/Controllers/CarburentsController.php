<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carburent;
class CarburentsController extends Controller
{
    // 
	public function index()
    {
        //yjib ge3 les carburent b all() w y7ethoum fi $carburents
        $carburents = Carburent::all();

        // après yretouni l view table_carburents w yzidelha la variables carburents
        // b la fct with()
        return view('table_carburent')->with('carburents',$carburents);
    }
	
	
	
	 public function edit($id)
    {
        // trouver le carburent a modifier
        $carburent = Carburent::where('id_carburent','=',$id)->firstOrFail();
        //retourner le view de modification
        return view('editer_carburents')->with('carburent',$carburent);
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
        //trouver le carburent
        $carburent = Carburent::where('id_carburent','=',$id)->firstOrFail();
        //mise a jour des informations
        $carburent = $carburent->update([
            'name_carburent' => $request->nom_carburent,
         
          
        ]);

        return redirect()->back();
    }
    public function destroy($id)
    {
        // trouver le carburent qui a le id
        $carburent = Carburent::where('id_carburent','=',$id)->firstOrFail();
        //le supprimer
        $carburent->delete();

        //retour vers la page
        return redirect()->back();
    }
	
	
	
	
	
	
	
	
	
	
}
