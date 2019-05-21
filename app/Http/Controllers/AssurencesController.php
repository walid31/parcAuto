<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assurence;

class AssurencesController extends Controller
{

	 public function index()
    {
        //yjib ge3 les assurence b all() w y7ethoum fi $assurences
        $assurences = Assurence::all();
		//dd($assurences);
        // après yretouni l view table_assurences w yzidelha la variables assurences
        // b la fct with()
        return view('table_assurences')->with('assurences',$assurences);
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
        return view('ajouter_assurence');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // hadi la fonction li t'inseri tuple te3 assurence
    public function store(Request $request)
    {
        // $request fiha ge3 les données li yjouna men formulaire
        $assurence = Assurence::create([
            //name_assurence par ex howa le nom te3 field fi la bdd
            // $request->nom_assurence howa li yjina mel formulaire
            'name_assurence' => $request->nom_assurence,
            'email_assurence' => $request->gmail_assurence,
            'add_assurence' => $request->adress_assurence,
            'tel_assurence' => $request->tele_assurence,
        ]);

        //après ndirou save bech yetsavgarda fi la bdd
        $assurence->save();

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
        // trouver le assurence a modifier
        $assurence = Assurence::where('id_assurences','=',$id)->firstOrFail();
        //retourner le view de modification
        return view('editer_assurences')->with('assurence',$assurence);
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
//        //dd($request);
        //trouver le assurence
        //$assurance = Assurence::where('id_assurences','=',$id)->firstOrFail();
        //mise a jour des informations
        
			$assurance = Assurence::find($id);
			//dd($assurance);
            $assurance->name_assurence = $request->nom_assurence;
            $assurance->email_assurence = $request->gmail_assurence;
            $assurance->add_assurence = $request->adress_assurence;
            $assurance->tel_assurence = $request->tele_assurence;
			
			$assurance->save();
			
			$assurences = Assurence::all();
		
			return view('table_assurences')->with('assurences',$assurences);
    }
    public function destroy($id)
    {
        // trouver le assurence qui a le id
        $assurence = Assurence::where('id_assurences','=',$id)->firstOrFail();
        //le supprimer
        $assurence->delete();

        //retour vers la page
        return redirect()->back();
    }
    //
}
