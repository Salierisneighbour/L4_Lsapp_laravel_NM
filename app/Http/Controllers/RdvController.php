<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Medecin;
use App\DemandeRDV;
use App\RDV;
use DB;
class RdvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $Patients = Patient::All();
        $Medecins = Medecin::All();
        $RDVS= DB::select('SELECT * from `r_d_v_s` where DATE(Date_RDV) = CURDATE()');
        $routename='TodaysRdvs.destroy';
        $recordid=0;
        return view('AdminPages.RdvToday')->with('RDVS',$RDVS)->with('Patients',$Patients)->with('routename',$routename)->with('recordid',$recordid)->with('Medecins',$Medecins);
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
        //
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
        $Patient = new Patient;
        $Demande = DemandeRDV::find($id);
        $Patient->NomPatient = $Demande->NomPatient;
        $Patient->PrenomPatient = $Demande->PrenomPatient;
        $Patient->AdrsPatient = $Demande->AdrsPatient;;
        $Patient->email = $Demande->email;
        $Patient->TelPatient = $Demande->TelPatient;
        $Patient->Sexe = $Demande->Sexe;
        $Patient->DateNaissance = $Demande->DateNaissance;
        $Patient->Profession = $Demande->Profession;
        $Patient->EtatCivil = $Demande->EtatCivil;
        $Patient->Assurance = $Demande->Assurance;
        $Patient->save();
        
        $idDernierPatientenregistre = Patient::orderBy('created_at','desc')->take(1)->value('id_patient');
        
        $RDV = new RDV;
        $RDV->Date_RDV = $request->input('daterendezvous');
        $RDV->Motif = $request->input('motif');
        $RDV->id_patient =$idDernierPatientenregistre;
        $RDV->id_medecin = $request->input('idmedecin');
        $RDV->save();
        return redirect('/TodaysRdvs')->with('success','Bien affécté');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $RDV = RDV::find($id);
        $RDV->delete();
        return redirect("/TodaysRdvs")->with('success','Bien supprimé');
    }



}
