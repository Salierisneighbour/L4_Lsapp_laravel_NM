<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\DemandeConseil;

class Demande_Conseil extends Controller
{
    public function store(Request $request)
    {
       $this->validate($request,[
              'fullname' => 'required|regex:/^[\pL\s\-]+$/u|max:150|min:5',
              'email' => 'required|email|max:200',
              'message' => 'required|required:16777216|min:15',
              'telephone' => 'required|regex:/^[\+(00)][1-2]?[0-9]?[0-9]\d{9}+$/i'

       ],
       [
             'fullname.required' => "Veuillez saisir votre nom complet",
             'fullname.regex' => "Votre nom doit contenir que des caractères",
             'fullname.max' => "Nom trop long",
             'fullname.min' => "Veuillez verifier que vous avez saisis votre nom complet",
             'email.required' => "Veuillez saisir votre email",
             'email.email' => "Le format de l'email n'est pas valide",
             'email.max' => "la taille maximun de l'email est dépassée",
             'message.required' => "Veuillez saisir un message à envoyer",
             'message.max' => "Votre message est trop long",
             'message.min' => "Veuillez saisir un message siginficatif",
             'telephone.required' => 'Le telephone est obligatoire',
             
             'telephone.regex' => "telephone invalide"
                    

       ]
    );

       //create post
       $Demande = new DemandeConseil;
       $Demande->FullName = $request->input('fullname');
       $Demande->email = $request->input('email');
       $Demande->Telephone = $request->input('telephone');
       $Demande->Message = $request->input('message');
       $Demande->save();
       
      

       return redirect('/')->with('success','Votre Message a été envoyé');
       

    }
    
    public function Liste()
    {
        
        $LesDemandes = DemandeConseil::orderBy('created_at','desc')->get();
        return view('AdminPages.DemandeConseil')->with('LesDemandes', $LesDemandes);
    }

    

}
