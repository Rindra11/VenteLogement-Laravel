<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agences;

class AgenceController extends Controller
{
    /*
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
       return redirect('/');

    }
    function readdata(){
        $pdata = agences::all();
        return \view('insertAgence',['data'=>$pdata]);
    }

    public function edit($LibelleA)
    {
        $ange = agences::where('Libelle',$LibelleA)->first();
        return view('insertAgence.edit')->with('agences', $ange);
        return \redirect('/');
    }*/
}
