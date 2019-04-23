<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\DemandeConseil;

class Demande_Conseil extends Controller
{
    public function store(Request $request)
    {
       $this->validate($request,[
              'fullname' => 'required',
              'email' => 'required',
              'message' => 'required'


       ]);

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
