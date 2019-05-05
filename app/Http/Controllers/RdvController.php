<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Patient;
use App\Medecin;
use App\DemandeRDV;
use App\RDV;
use DB;

class RdvController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
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
        if(is_null($Demande->id_patient))
        {
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
            $Demande->id_patient = $idDernierPatientenregistre;
            $Demande->save();
            $idpatient=$Demande->id_patient;
            

        }
        else
        {
            $idpatient=$Demande->id_patient;
        }
        
        $RDV = new RDV;
        
        $this->validate($request,[
            //'daterendezvous' => 'required|date_format:Y-m-d H:i|unique:r_d_v_s,Date_RDV,except,id_patient',
            /*'daterendezvous' => ['required','date_format:Y-m-d H:i',Rule::unique('r_d_v_s')->where(function ($query) use($Date_RDV,$id_patient){

                return $query->where('Date_RDV',$Date_RDV)->where('id_patient',$id_patient);
            })],*/

            'daterendezvous' => 'required|date_format:Y-m-d H:i|unique:r_d_v_s,Date_RDV,NULL,id_patient,id_patient,'.$idpatient,
            'motif' => 'required|min:10|max:16777216',
            'idmedecin' => 'required|numeric',
            
            
           
         ],
        [
          'daterendezvous.required' => "Le date du rendez vous est obligatoire",
          'daterendezvous.date' => "La format de la date rendez vous n'est pas valide 'example : 2019-05-10 10:30'",
          'idmedecin.required' => "L'id du medecin n'est pas selectionnez",
          'idmedecin.numeric' => "L'id du medecin n'est pas selectionnez",
          "Motif.required" => "le motif doit être saisis",
          "Motif.max" => "le champ motif est trop long",
          "Motif.min" => "Le motif doit être significatif",
          'daterendezvous.unique' => "le patient à deja un rendez vous dans cette date"

          
           
         ]
          
      );

      





        $RDV->Date_RDV = $request->input('daterendezvous');
        $RDV->Motif = $request->input('motif');
        $RDV->id_patient =$idpatient;
        $RDV->id_medecin = $request->input('idmedecin');
        $RDV->save();
        return redirect('/DRDV')->with('success','Bien affécté');
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
