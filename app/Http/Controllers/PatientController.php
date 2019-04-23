<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;



class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Patients = Patient::All();
    
        $routename='Patients.destroy';
        $recordid=0;
        return view('AdminPages.LstPatients')->with('Patients',$Patients)->with('routename',$routename)->with('recordid',$recordid);
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
        $Patient = new Patient;
        $Patient->NomPatient = $request->input('nom');
        $Patient->PrenomPatient = $request->input('prenom');
        $Patient->AdrsPatient = $request->input('adresse');
        $Patient->email = $request->input('email');
        $Patient->TelPatient = $request->input('telephone');
        $Patient->Sexe = $request->input('inlineRadioOptions');
        $Patient->DateNaissance = $request->input('datedenaissance');
        $Patient->Profession = $request->input('profession');
        $Patient->EtatCivil = $request->input('etatcivil');
        $Patient->Assurance = $request->input('assurence');
        $Patient->save();
        return  redirect("/Patients")->with('success','Le patient a été créer avec succes');
        
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
        $Patient = Patient::find($id);
        $Patient->NomPatient = $request->input('nom');
        $Patient->PrenomPatient = $request->input('prenom');
        $Patient->AdrsPatient = $request->input('adresse');
        $Patient->email = $request->input('email');
        $Patient->TelPatient = $request->input('telephone');
        $Patient->Sexe = $request->input('inlineRadioOptions');
        $Patient->DateNaissance = $request->input('datedenaissance');
        $Patient->Profession = $request->input('profession');
        $Patient->EtatCivil = $request->input('etatcivil');
        $Patient->Assurance = $request->input('assurence');
        $Patient->save();
        return  redirect("/Patients")->with('success','Le patient a été modifié avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Patient = Patient::find($id);
        $Patient->delete();
        return  redirect("/Patients")->with('success','Le patient a été supprimé avec succes');
    }
}
