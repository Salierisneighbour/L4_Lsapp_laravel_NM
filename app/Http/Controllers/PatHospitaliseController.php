<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\OccupeChambre;
use App\Chambre;
use DB;

class PatHospitaliseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Occups = OccupeChambre::All();
        $Patients=Patient::ALL();
        $PatientsNonHosp= DB::select('SELECT * from `patients` where id_patient Not in (SELECT id_patient from `occupe_chambres`)');
        $Chambreslibre = DB::select('SELECT `chambres`.id_chambre , NumChambre ,Nblit   From `chambres`  group by `chambres`.id_chambre , NumChambre , Nblit having Nblit > (SELECT count(`occupe_chambres`.id_chambre) from `occupe_chambres` where `chambres`.id_chambre= `occupe_chambres`.id_chambre)');
        $Chambres=Chambre::All();
        $routename='PatHosp.destroy';
        $recordid=0;
        return view('AdminPages.ListePatientsHospitalisés')->with('Patients',$Patients)->with('routename',$routename)->with('recordid',$recordid)->with('Chambres',$Chambres)->with('Occups',$Occups)->with('PatientsNonHosp',$PatientsNonHosp)->with('Chambreslibre',$Chambreslibre);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Occup = new OccupeChambre;
        $Occup->DateDebutOccup = $request->input('DBOcuup');
        $Occup->DateFinOccup = $request->input('DFOcuup');
        $Occup->id_chambre = $request->input('idchambre');
        $Occup->id_patient = $request->input('idpatient');
        $Occup->save();
        return redirect("/PatHosp")->with('success','Bien Affecté');
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
        $Occup =  OccupeChambre::find($id);
        $Occup->DateDebutOccup = $request->input('DBOcuup');
        $Occup->DateFinOccup = $request->input('DFOcuup');
        $Occup->id_chambre = $request->input('idchambre');
        $Occup->id_patient = $request->input('idpatient');
        $Occup->save();
        return redirect("/PatHosp")->with('success','Bien Affecté');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Occup =  OccupeChambre::find($id);
        $Occup->delete();
        return redirect("/PatHosp")->with('success','Bien supprimé');
    }
}
