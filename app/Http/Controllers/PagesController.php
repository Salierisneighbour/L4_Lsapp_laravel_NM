<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at','asc')->take(2)->get();
        return view('PublicPages.index')->with('posts', $posts);;
    }
    public function MoreinfoServices(){
        return view('PublicPages.MoreInfo.Services');
    }
    public function MoreinfoTeam(){
        return view('PublicPages.MoreInfo.Team');
    }
    public function Statistiques(){
        return view('AdminPages.Statistiques');
    }
    public function Ordonance(){
        return view('AdminPages.Ordonance');
    }
    public function Facture(){
        return view('AdminPages.Facture');
    }
    public function DRDV(){
        return view('AdminPages.DemandeRDV');
    }
    public function DConseil(){
        return view('AdminPages.DemandeConseil');
    }

    public function LstChambre(){
        return view('AdminPages.ListeChambre');
    }
    public function LstPatients(){
        return view('AdminPages.ListePatients');
    }
    
    public function LstMedecins(){
        return view('AdminPages.ListeMedecins');
    }

    public function Agenda(){
        return view('AdminPages.Agenda');
    }
  
}
