<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DemandeRDV;
use Illuminate\Validation\Rule;

class Envoidemande extends Controller
{
    
    public function store(Request $request)
    {
        $this->validate($request,[
            'NomPatient' => 'required|alpha|max:100',
            'PrenomPatient' => 'required|alpha|max:100',
            'AdrsPatient' => 'required|string|max:100',
            'TelPatient' => 'required|min:11|max:12|regex:/^[\+(00)][1-2]?[0-9]?[0-9]\d{9}+$/i',//'email' => 'regex:/^.+@.+$/i'
            'EmailPatient' => 'required|email|max:200',
            'inlineRadioOptions' => 'required',
            'DNPatient' => 'required|date_format:Y-m-d',
            'ProfessionPatient' => 'required|alpha|max:50',
            'EtatCivil' => 'required|alpha|max:30',
            'AssurencePatient' => ['required',Rule::in(['CNOPS','CNSS','Autre'])],
            'Motif' => 'required|string|min:10|max:16777216'

         ],
        [
          'NomPatient.required' => 'Le nom du patient est obligatoire',
          'PrenomPatient.required'  => "Le prenom du patient est obligatoire",
          'AdrsPatient.required' => "l'adresse est obligatoire",
          'TelPatient.required' => 'Le telephone est obligatoire',
          'EmailPatient.required'  => "L'email est obligatoire",
          'inlineRadioOptions.required' => "le champ sexe n'est pas selectionee",
          'DNPatient.required' => 'La date de naissance est obligatoire',
          'ProfessionPatient.required'  => "La profession est obligatoire",
          'EtatCivil.required' => "L'etat civil est obligatoire",
          'NomPatient.alpha' => "Le nom ne doit contenir que des lettres",
          'PrenomPatient.alpha' => "Le prenom ne doit contenir que des lettres",
          'AdrsPatient.string' => "Le format de l'adresse n'est pas valide",
          'ProfessionPatient.alpha' => 'la profession ne doit contenir que des lettres',
          'EtatCivil.alpha' => "L'etat civil ne doit contenir que des lettres",
          'NomPatient.max' => "le nom est trop long",
          'PrenomPatient.max' => "le prenom est treop long",
          'EmailPatient.email' => "format email non valide",
          'EmailPatient.max' => "l'email est trop long",
          'AdrsPatient.max' =>"l'adresse est trop long",
          'DNPatient.date_format' => "le format de la date n'est pas valide ' format valide : Year-Month-Day example :1995-06-11",
          'ProfessionPatient.max' => "la profession est trop long",
          'EtatCivil.max' => "l'etat civiL est trop long",
          'AssurencePatient.required' => "l'assurence est obligatoire",
          'AssurencePatient.in' => "Assurence non valide",
          "TelPatient.regex" => "Numero de telephone non valide",
          "Motif.required" => "le motif doit être saisis",
          "Motif.max" => "le champ motif est trop long",
          "Motif.min" => "Le motif doit être significatif",
          "Motif.string" => "Motif invalide"
          
           
         ]
          
     );

       //create Demande
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

       return redirect('/')->with('success','Votre demande a été envoyé');
       

    }
}
