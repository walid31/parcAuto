<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fournisseur;

class FournisseursController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 // hado la fct li t'afficher la table te3 les fournisseurs
   public function index()
    {
        //yjib ge3 les fournisseur b all() w y7ethoum fi $fournisseurs
        $fournisseurs = Fournisseur::all();

        // après yretouni l view table_fournisseurs w yzidelha la variables fournisseurs
        // b la fct with()
        return view('table_fournisseurs')->with('fournisseurs',$fournisseurs);
    }

    /*

    public function search(Request $request){
        $val = $request->val;

        $stms = Stimulation::where('name','LIKE','%'.$val.'%')->latest()->paginate(10);

        return view('stimulations.index')->with('stms',$stms)
            ->with('val',$val);

    }*/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ajouter_fournisseur');
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
        $fournisseur = Fournisseur::create([
            //name_fournisseur par ex howa le nom te3 field fi la bdd
            // $request->nom_fournisseur howa li yjina mel formulaire
            'name_fournisseur' => $request->nom_fournisseur,
            'email_fournisseur' => $request->gmail_fournisseur,
            'add_fournisseur' => $request->adress_fournisseur,
            'tel_fournisseur' => $request->tele_fournisseur,
        ]);

        //après ndirou save bech yetsavgarda fi la bdd
        $fournisseur->save();

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
    {
        // trouver le fournisseur a modifier
        $fournisseur = Fournisseur::where('id_fournisseur','=',$id)->firstOrFail();
        //retourner le view de modification
        return view('editer_fournisseurs')->with('fournisseur',$fournisseur);
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
        //trouver le fournisseur
        $fournisseur = Fournisseur::where('id_fournisseur','=',$id)->firstOrFail();
        //mise a jour des informations
        $fournisseur = $fournisseur->update([
            'name_fournisseur' => $request->nom_fournisseur,
            'email_fournisseur' => $request->gmail_fournisseur,
            'add_fournisseur' => $request->adress_fournisseur,
            'tel_fournisseur' => $request->tele_fournisseur,
        ]);

        return redirect()->back();
    }
    public function destroy($id)
    {
        // trouver le fournisseur qui a le id
        $fournisseur = Fournisseur::where('id_fournisseur','=',$id)->firstOrFail();
        //le supprimer
        $fournisseur->delete();

        //retour vers la page
        return redirect()->back();
    }
}
