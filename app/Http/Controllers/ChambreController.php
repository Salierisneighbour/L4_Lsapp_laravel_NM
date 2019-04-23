<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chambre;

class ChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $chambres = Chambre::orderby('NumChambre','asc')->get();
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
           'Numero' => 'required',
           'Etage' => 'required',
           'Lit' => 'required',
           'Etat' => 'required'
        ]);

        $Chambre = new Chambre;
        $Chambre->NumChambre = $request->input('Numero');
        $Chambre->Etage = $request->input('Etage');
        $Chambre->Nblit = $request->input('Lit');
        $Chambre->EtatOccup = $request->input('Etat');
        $Chambre->save();

        return  redirect('/Chambres')->with('success','La Chambre à été modifiée');
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
            'Numero' => 'required',
            'Etage' => 'required',
            'Lit' => 'required',
            'Etat' => 'required'
         ]);
 
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
