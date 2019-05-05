<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Patient;



class PatientController extends Controller
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

        $this->validate($request,[
            'nom' => 'required|alpha|max:100',
            'prenom' => 'required|alpha|max:100',
            'adresse' => 'required|string|max:100',
            'telephone' => 'required|regex:/^[\+(00)][1-2]?[0-9]?[0-9]\d{9}+$/i',//'email' => 'regex:/^.+@.+$/i'
            'email' => 'required|email|max:200',
            'inlineRadioOptions' => 'required',
            'datedenaissance' => 'required|date_format:Y-m-d',
            'profession' => 'required|alpha|max:50',
            'etatcivil' => 'required|alpha|max:30',
            'assurence' => ['required',Rule::in(['CNOPS','CNSS','Autre'])]

         ],
        [
          'nom.required' => 'Le nom du patient est obligatoire',
          'prenom.required'  => "Le prenom du patient est obligatoire",
          'adresse.required' => "l'adresse est obligatoire",
          'telephone.required' => 'Le telephone est obligatoire',
          'email.required'  => "L'email est obligatoire",
          'inlineRadioOptions.required' => "le champ sexe n'est pas selectionee",
          'datedenaissance.required' => 'La date de naissance est obligatoire',
          'profession.required'  => "La profession est obligatoire",
          'etatcivil.required' => "L'etat civil est obligatoire",
          'nom.alpha' => "Le nom ne doit contenir que des lettres",
          'prenom.alpha' => "Le prenom ne doit contenir que des lettres",
          'adresse.string' => "Le format de l'adresse n'est pas valide",
          'profession.alpha' => 'la profession ne doit contenir que des lettres',
          'etatcivil.alpha' => "L'etat civil ne doit contenir que des lettres",
          'nom.max' => "le nom est trop long",
          'prenom.max' => "le prenom est treop long",
          'email.email' => "format email non valide",
          'email.max' => "l'email est trop long",
          'adresse.max' =>"l'adresse est trop long",
          'datedenaissance.date_format' => "le format de la date n'est pas valide ' format valide : Year-Month-Day example : 1995-06-11",
          'profession.max' => "la profession est trop long",
          'etatcivil.max' => "l'etat civiL est trop long",
          'assurence.required' => "l'assurence est obligatoire",
          'assurence.in' => "Assurence non valide",
          
          'telephone.regex' => "telephone invalide"
          
           
         ]
          
     );

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
        $this->validate($request,[
            'nom' => 'required|alpha|max:100',
            'prenom' => 'required|alpha|max:100',
            'adresse' => 'required|string|max:100',
            'telephone' => 'required|regex:/^[\+(00)][1-2]?[0-9]?[0-9]\d{9}+$/i',//'email' => 'regex:/^.+@.+$/i'
            'email' => 'required|email|max:200',
            'inlineRadioOptions' => 'required',
            'datedenaissance' => 'required|date_format:Y-m-d',
            'profession' => 'required|alpha|max:50',
            'etatcivil' => 'required|alpha|max:30',
            'assurence' => ['required',Rule::in(['CNOPS','CNSS','Autre'])]

         ],
        [
          'nom.required' => 'Le nom du patient est obligatoire',
          'prenom.required'  => "Le prenom du patient est obligatoire",
          'adresse.required' => "l'adresse est obligatoire",
          'telephone.required' => 'Le telephone est obligatoire',
          'email.required'  => "L'email est obligatoire",
          'inlineRadioOptions.required' => "le champ sexe n'est pas selectionee",
          'datedenaissance.required' => 'La date de naissance est obligatoire',
          'profession.required'  => "La profession est obligatoire",
          'etatcivil.required' => "L'etat civil est obligatoire",
          'nom.alpha' => "Le nom ne doit contenir que des lettres",
          'prenom.alpha' => "Le prenom ne doit contenir que des lettres",
          'adresse.string' => "Le format de l'adresse n'est pas valide",
          'profession.alpha' => 'la profession ne doit contenir que des lettres',
          'etatcivil.alpha' => "L'etat civil ne doit contenir que des lettres",
          'nom.max' => "le nom est trop long",
          'prenom.max' => "le prenom est treop long",
          'email.email' => "format email non valide",
          'email.max' => "l'email est trop long",
          'adresse.max' =>"l'adresse est trop long",
          'datedenaissance.date_format' => "le format de la date n'est pas valide ' format valide : Year-Month-Day example : 1995-06-11",
          'profession.max' => "la profession est trop long",
          'etatcivil.max' => "l'etat civiL est trop long",
          'assurence.required' => "l'assurence est obligatoire",
          'assurence.in' => "Assurence non valide",
          
          'telephone.regex' => "telephone invalide"
          
           
         ]
          
     );

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
