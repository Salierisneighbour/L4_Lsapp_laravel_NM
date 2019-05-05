<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DemandeRDV;
use App\Patient;
use App\Medecin;
use App\RDV;

class RdvDemande extends Controller
{




    //maybe need to fix this later
    public function __construct()
    {
        $this->middleware('auth');
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


        $this->validate($request,[
            //'daterendezvous' => 'requireddate_format:Y-m-d H:i|unique:r_d_v_s,Date_RDV,except,id_patient',
            'daterendezvous' => 'requireddate_format:Y-m-d H:i|unique:r_d_v_s,Date_RDV,except,id_patient',
            'motif' => 'required|string|min:10|max:16777216',
            'idchambre' => 'required|numeric',
            'idmedecin' => 'required|numeric'
           
         ],
        [
          'daterendezvous.required' => "Le date du rendez vous est obligatoire",
          'motif.required'  => "Le date de fin d'occupation est obligatoire",
          'idchambre.required' => "L'id de la chambre n'est pas selectionnez",
          'idmedecin.required' => "L'id du medecin n'est pa selectionnez",
          'daterendezvous.date_format'  => "le format de la date de rendez vous n'est pas valide ' format valide : Year-Month-Day Time example : 2019-05-11 10:30",
          'motif.string' => "Format Motif invalide",
          'motif.min' => "Veuillez saisir un motif significatif",
          'motif.max' => "Taille max motif depassée",
          'idchambre.numeric' => "L'id de la chambre n'est pas selectionnez",
          'idmedecin.numeric' => "L'id du medecin n'est pa selectionnez",
          'daterendezvous.unique' => "le patient à deja un rendez vous dans cette date"
          

          
           
         ]
          
      );

       $RDV = RDV::find($id);
       $RDV->Date_RDV = $request->input('daterendezvous');
       $RDV->Motif = $request->input('motif');
       $RDV->id_patient = $request->input('idpatient');
       $RDV->id_medecin = $request->input('idmedecin');
       $RDV->save();
       return redirect('/DRDV')->with('success','Bien modifié');
    }

    
}
