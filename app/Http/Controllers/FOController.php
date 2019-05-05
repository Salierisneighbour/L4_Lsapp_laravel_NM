<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Facture;
use Illuminate\Validation\Rule;
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

}
