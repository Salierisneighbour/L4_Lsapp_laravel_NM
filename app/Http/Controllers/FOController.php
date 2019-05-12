<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Facture;
use Illuminate\Validation\Rule;
use App\Ordonance;

use DB;
class FOController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function Facture($id)
    {
           $Patient = Patient::find($id);
          
           return view('AdminPages.Facture')->with('Patient',$Patient);
       
    }
    function Ordonance($id)
    {
        $Patient = Patient::find($id);
        return view('AdminPages.Ordonance')->with('Patient',$Patient);;
    }
    
   
    function Fprint(Request $request , $id)
    { 
        
        $this->validate($request,[
            'modepay' => ['required',Rule::in(['Espéces','Chéque','Virement'])],
            'Pharmacie' => 'numeric',
            'hospita' => 'numeric',
            'consulta' => 'numeric',
            'montant' => 'required|numeric',
            'NumFac' => 'required|string',
            'Date' => 'required|date_format:Y-m-d',
            

         ],
        [
            "modepay.required" =>"Le mode de payement est obligatoire",
            "modepay.in" =>"mode de payement invalide",
            "Pharmacie.numeric" => "Le champ pharmacie est invalide",
            
            "consulta.numeric" => "Le champ consultation est invalide",
            
            "hospita.numeric" => "Le champ hospitalisation est invalide",
            
            "montant.numeric" => "le montant total est invalide",
           
            "montant.required" => "le montant total est obligatoire",
            "NumFac.string" => "le numero de la facture est invalide",
            "NumFac.required" => "le numero de la facture est obligatoire",
            "Date.required" => "La date est obligatoire",
            "NumFac.date_format" => "la date est invalide",
            
           
         ]
          
     );
        $Patient = Patient::find($id);
        $Facture = new Facture;
        $Facture->Modepayement = $request->input('modepay');
        $Facture->Pharmacie = $request->input('Pharmacie');
        $Facture->Hospitalisation = $request->input('hospita');
        $Facture->Consultation = $request->input('consulta');
        $Facture->Montant = $request->input('montant');
        $Facture->id_patient = $Patient->id_patient;
        $Facture->NumFacture = $request->input('NumFac');
        $Facture->Date   = $request->input('Date');
        $Facture->save();
        $lastfacture = Facture::orderBy('created_at','desc')->take(1)->get();
        return view('AdminPages.Fprint')->with('Patient',$Patient)->with('lastfacture', $lastfacture);


    }




    function Oprint(Request $request , $id)
    { 
        
        $this->validate($request,[
            'Date' => 'required|date_format:Y-m-d',
            'Titre' => 'required|string',
            'obrservation' => 'required|string',
            'Traitement' => 'required|string',
            'Num' => 'required|string'
            

         ],
        [
            "Date.required" =>"La date est obligatoire",
            "Date.date_format" =>"la format de la date est invalide",
            "Titre.required" => "le titre est obligatoire",
            
            "Titre.string" => "la format du titre est invalide",
            
            "obrservation.required" => "l'observation est obligatoire",
            
            "obrservation.string" => "la format de l'observation est invalide",
           
            "Traitement.required" => "le traitement  est obligatoire",

            "Traitement.string" => "la format du traitement est invalide",

            "Num.required" => "Le numero est obligatoire",

            "Num.string" => "la format du numero est invalide",
            
         ]
          
     );
        $Patient = Patient::find($id);
        $Ordonnance = new Ordonance;
        $Ordonnance->Titre = $request->input('Titre');
        $Ordonnance->Observation = $request->input('obrservation');
        $Ordonnance->Traintement = $request->input('Traitement');
        $Ordonnance->NumOrdo = $request->input('Num');
        $Ordonnance->Date = $request->input('Date');
        $Ordonnance->id_patient = $Patient->id_patient;
        $Ordonnance->save();
        $lastordo = Ordonance::orderBy('created_at','desc')->take(1)->get();
        return view('AdminPages.Oprint')->with('Patient',$Patient)->with('lastordo', $lastordo);


    }
    function OOprint($id)
    {
           $Patient = Patient::find($id);
           $lastordo = Ordonance::orderBy('created_at','desc')->take(1)->get();
           return view('AdminPages.Oprint')->with('Patient',$Patient)->with('lastordo', $lastordo);
       
    }
    



}
