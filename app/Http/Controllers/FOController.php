<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class FOController extends Controller
{
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
}
