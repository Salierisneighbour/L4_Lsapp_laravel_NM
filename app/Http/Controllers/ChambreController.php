<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Chambre;

class ChambreController extends Controller
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
       $chambres = Chambre::orderby('NumChambre','asc')->paginate(10);
       $routename='Chambres.destroy';
       $recordid=0;
       return view('AdminPages.ListeChambre')->with('chambres' , $chambres)->with('routename',$routename)->with('recordid',$recordid);
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
            'Numero' => 'required|numeric|unique:chambres,NumChambre|max:500|min:1',
            'Etage' => 'required|numeric|max:10|min:1',
            'Lit' => 'required|numeric|max:10|min:1',
            'Etat' => ['required',Rule::in(['Occupée','Libre'])]
             ],    
             [
             'Numero.required' => 'Le numero de la chambre doit être remplis',
             'Etage.required'  => "l'etage de la chambre doit être remplis",
             'Lit.required' => 'le nombre de lit doit être remplis',
             'Etat.required'  => "l'etat de la chambre doit être remplis",
             'Numero.numeric' => 'Le numero de la chambre doit être numeric',
             'Etage.numeric'  => "l'etage de la chambre doit être numeric",
             'Lit.numeric' => 'le nombre de lit doit être numeric',
             'Etat.in' => "l'etat de la chambre doit être soit Occupée ou Libre",
             'Numero.unique' => "Le numero de la chambre existe déjà",
             'Numero.max' => "le numero de la chambre saisi est trop grand maximun 500",
             'Etage.max' => "l'etage de la chambre saisi est trop grand maximun 10",
             'Lit.max' => "le nombre de lit saisi est trop grand maximun 10",
             'Numero.min' => "le numero de la chambre saisi est doit être superieur à 0",
             'Etage.min' => "l'etage de la chambre saisi doit être superieur à 0",
             'Lit.min' => "le nombre de lit saisi doit être superieur à 0"
             ]
         );

        $Chambre = new Chambre;
        $Chambre->NumChambre = $request->input('Numero');
        $Chambre->Etage = $request->input('Etage');
        $Chambre->Nblit = $request->input('Lit');
        $Chambre->EtatOccup = $request->input('Etat');
        $Chambre->save();

        return  redirect('/Chambres')->with('success','La Chambre à été ajouté avec succes');
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
            'Numero' => 'required|numeric|unique:chambres,NumChambre|max:500|min:1',
            'Etage' => 'required|numeric|max:10|min:1',
            'Lit' => 'required|numeric|max:10|min:1',
            'Etat' => ['required',Rule::in(['Occupée','Libre'])]
             ],    
             [
             'Numero.required' => 'Le numero de la chambre doit être remplis',
             'Etage.required'  => "l'etage de la chambre doit être remplis",
             'Lit.required' => 'le nombre de lit doit être remplis',
             'Etat.required'  => "l'etat de la chambre doit être remplis",
             'Numero.numeric' => 'Le numero de la chambre doit être numeric',
             'Etage.numeric'  => "l'etage de la chambre doit être numeric",
             'Lit.numeric' => 'le nombre de lit doit être numeric',
             'Etat.in' => "l'etat de la chambre doit être soit Occupée ou Libre",
             'Numero.unique' => "Le numero de la chambre existe déjà",
             'Numero.max' => "le numero de la chambre saisi est trop grand maximun 500",
             'Etage.max' => "l'etage de la chambre saisi est trop grand maximun 10",
             'Lit.max' => "le nombre de lit saisi est trop grand maximun 10",
             'Numero.min' => "le numero de la chambre saisi est doit être superieur à 0",
             'Etage.min' => "l'etage de la chambre saisi doit être superieur à 0",
             'Lit.min' => "le nombre de lit saisi doit être superieur à 0"
             ]
         );
         
         $Chambre = Chambre::find($id);
         $Chambre->NumChambre = $request->input('Numero');
         $Chambre->Etage = $request->input('Etage');
         $Chambre->Nblit = $request->input('Lit');
         $Chambre->EtatOccup = $request->input('Etat');
         $Chambre->save();
 
         return  redirect('/Chambres')->with('success','La Chambre à été crée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $chambre = Chambre::find($id);
        $chambre->delete();

        return redirect('/Chambres')->with('success','La chambre à été supprimée avec succes');
    }





    
}
