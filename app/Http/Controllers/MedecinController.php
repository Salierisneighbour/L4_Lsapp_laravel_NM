<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medecin;
class MedecinController extends Controller
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
        $this->validate($request,[
            'nom' => 'required|alpha|max:100',
            'prenom' => 'required|alpha|max:100',
            'adresse' => 'required|string|max:100',
            'telephone' => 'required|regex:/^[\+(00)][1-2]?[0-9]?[0-9]\d{9}+$/i',//'email' => 'regex:/^.+@.+$/i'
            'email' => 'required|email|max:200',
            'inlineRadioOptions' => 'required',
            'DateN' => 'required|date_format:Y-m-d',
            'prestation' => 'required|alpha|max:80',
            'etatcivil' => 'required|alpha|max:30',

         ],
        [
          'nom.required' => 'Le nom du medecin est obligatoire',
          'prenom.required'  => "Le prenom du medecin est obligatoire",
          'adresse.required' => "l'adresse est obligatoire",
          'telephone.required' => 'Le telephone est obligatoire',
          'email.required'  => "L'email est obligatoire",
          'inlineRadioOptions.required' => "le champ sexe n'est pas selectionee",
          'DateN.required' => 'La date de naissance est obligatoire',
          'prestation.required'  => "La prestation est obligatoire",
          'etatcivil.required' => "L'etat civil est obligatoire",
          'nom.alpha' => "Le nom ne doit contenir que des lettres",
          'prenom.alpha' => "Le prenom ne doit contenir que des lettres",
          'adresse.string' => "Le format de l'adresse n'est pas valide",
          'prestation.alpha' => 'la prestation ne doit contenir que des lettres',
          'etatcivil.alpha' => "L'etat civil ne doit contenir que des lettres",
          'nom.max' => "le nom est trop long",
          'prenom.max' => "le prenom est treop long",
          'email.email' => "format email non valide",
          'email.max' => "l'email est trop long",
          'adresse.max' =>"l'adresse est trop long",
          'DateN.date_format' => "le format de la date n'est pas valide ' format valide : Year-Month-Day example : 1995-06-11",
          'prestation.max' => "la prestation est trop long",
          'etatcivil.max' => "l'etat civiL est trop long",
          "telephone.regex" => "Numero de telephone non valide"
          
           
         ]
          
     );
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
        $this->validate($request,[
            'nom' => 'required|alpha|max:100',
            'prenom' => 'required|alpha|max:100',
            'adresse' => 'required|string|max:100',
            'telephone' => 'required|regex:/^[\+(00)][1-2]?[0-9]?[0-9]\d{9}+$/i',//'email' => 'regex:/^.+@.+$/i'
            'email' => 'required|email|max:200',
            'inlineRadioOptions' => 'required',
            'DateN' => 'required|date_format:Y-m-d',
            'prestation' => 'required|alpha|max:80',
            'etatcivil' => 'required|alpha|max:30',

         ],
        [
          'nom.required' => 'Le nom du medecin est obligatoire',
          'prenom.required'  => "Le prenom du medecin est obligatoire",
          'adresse.required' => "l'adresse est obligatoire",
          'telephone.required' => 'Le telephone est obligatoire',
          'email.required'  => "L'email est obligatoire",
          'inlineRadioOptions.required' => "le champ sexe n'est pas selectionee",
          'DateN.required' => 'La date de naissance est obligatoire',
          'prestation.required'  => "La prestation est obligatoire",
          'etatcivil.required' => "L'etat civil est obligatoire",
          'nom.alpha' => "Le nom ne doit contenir que des lettres",
          'prenom.alpha' => "Le prenom ne doit contenir que des lettres",
          'adresse.string' => "Le format de l'adresse n'est pas valide",
          'prestation.alpha' => 'la prestation ne doit contenir que des lettres',
          'etatcivil.alpha' => "L'etat civil ne doit contenir que des lettres",
          'nom.max' => "le nom est trop long",
          'prenom.max' => "le prenom est treop long",
          'email.email' => "format email non valide",
          'email.max' => "l'email est trop long",
          'adresse.max' =>"l'adresse est trop long",
          'DateN.date_format' => "le format de la date n'est pas valide ' format valide : Year-Month-Day example : 1995-06-11",
          'prestation.max' => "la prestation est trop long",
          'etatcivil.max' => "l'etat civiL est trop long",
          "telephone.regex" => "Numero de telephone non valide"
          
           
         ]
          
     );

        
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
