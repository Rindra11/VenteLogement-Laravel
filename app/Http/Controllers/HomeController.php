<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function accueil()
    {
        $userName = 'Rindra';
        return view('accueil', ['name' => $userName]);
    }

    public function method1($userName)
    {
        return 'Good Morning' . $userName;
    }

    public function terrain()
    {
        return 'Ceci affiche le terrain';
    }

    function insert(Request $req){
        $identite = $req->get('IdA');
        $libelle = $req->get('LibelleA');
        $adresse = $req->get('AdresA');
        $telephone = $req->get('TelA');
        $email = $req->get('EmailA');

       // return $req->input();
       $ange = new agences();
       $ange->IdA = $identite;
       $ange->LibelleA = $libelle;
       $ange->AdresA = $adresse;
       $ange->TelA = $telephone;
       $ange->EmailA = $email;
       $ange->save();
       return redirect('/accueil');

    }
    function readdata(){
        $pdata = agences::all();
        return \view('insertAgence',['data'=>$pdata]);
    }

}
