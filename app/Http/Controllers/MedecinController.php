<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medecin;
class MedecinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Medecins = Medecin::All();
    
        $routename='Medecin.destroy';
        $recordid=0;
        return view('AdminPages.ListeMedecins')->with('Medecins',$Medecins)->with('routename',$routename)->with('recordid',$recordid);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Medecin = new Medecin;
        $Medecin->NomMedecin = $request->input('nom');
        $Medecin->PrenomMedecin = $request->input('prenom');
        $Medecin->AdrsMedecin = $request->input('adresse');
        $Medecin->TelMedecin = $request->input('telephone');
        $Medecin->email = $request->input('email');
        $Medecin->Sexe = $request->input('inlineRadioOptions');
        $Medecin->DateNaissance = $request->input('DateN');
        $Medecin->Prestation = $request->input('prestation');
        $Medecin->EtatCivil = $request->input('etatcivil');
        $Medecin->save();
        return redirect('/Medecin')->with('success','Medecin créer avec success');
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
        //
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
        
        $Medecin = Medecin::find($id);
        $Medecin->NomMedecin = $request->input('nom');
        $Medecin->PrenomMedecin = $request->input('prenom');
        $Medecin->AdrsMedecin = $request->input('adresse');
        $Medecin->TelMedecin = $request->input('telephone');
        $Medecin->email = $request->input('email');
        $Medecin->Sexe = $request->input('inlineRadioOptions');
        $Medecin->DateNaissance = $request->input('DateN');
        $Medecin->Prestation = $request->input('prestation');
        $Medecin->EtatCivil = $request->input('etatcivil');
        $Medecin->save();
        return redirect('/Medecin')->with('success','Medecin modifié avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Medecin = Medecin::find($id);
        $Medecin->delete();
        return redirect('/Medecin')->with('success','Medecin supprimé avec success');
    }
}
