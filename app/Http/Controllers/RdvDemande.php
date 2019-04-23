<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DemandeRDV;
use App\Patient;
use App\Medecin;
use App\RDV;

class RdvDemande extends Controller
{
    public function store(Request $request)
    {
     

       //create post
       $Demande = new DemandeRDV;
       $Demande->NomPatient = $request->input('NomPatient');
       $Demande->PrenomPatient = $request->input('PrenomPatient');
       $Demande->AdrsPatient = $request->input('AdrsPatient');
       $Demande->TelPatient = $request->input('TelPatient');
       $Demande->Sexe = $request->input('inlineRadioOptions');
       $Demande->email = $request->input('EmailPatient');
       $Demande->DateNaissance = $request->input('DNPatient');
       $Demande->Profession = $request->input('ProfessionPatient');
       $Demande->EtatCivil = $request->input('EtatCivil');
       $Demande->Assurance = $request->input('AssurencePatient');
       $Demande->Motif = $request->input('Motif');
       $Demande->save();

       return redirect('/')->with('success','Votre Message a été envoyé');
       

    }
    
    public function Liste()
    {
        $LesDemandes = DemandeRDV::orderBy('created_at','desc')->get();
        $Patients = Patient::All();
        $Medecins = Medecin::All();
        $routename='TodaysRdvs.destroy';
        $recordid=0;
        return view('AdminPages.DemandeRDV')->with('LesDemandes',$LesDemandes)->with('Patients',$Patients)->with('routename',$routename)->with('recordid',$recordid)->with('Medecins',$Medecins);
    }

    
    public function updating(Request $request, $id)
    {
       $RDV = RDV::find($id);
       $RDV->Date_RDV = $request->input('daterendezvous');
       $RDV->Motif = $request->input('motif');
       $RDV->id_patient = $request->input('idpatient');
       $RDV->id_medecin = $request->input('idmedecin');
       $RDV->save();
       return redirect('/TodaysRdvs')->with('success','Bien modifié');
    }

    
}
