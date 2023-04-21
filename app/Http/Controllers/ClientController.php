<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;

class ClientController extends Controller
{
    function client(Request $req){
       $identite = $req->get('IdCl');
       $nom = $req->get('NomCl');
       $adresse = $req->get('AdrsCl');
       $lieu = $req->get('LieuTraCl');

       $client = new client();
       $client->IdCl = $identite;
       $client->NomCl = $nom;
       $client->AdrsCl = $adresse;
       $client->LieuTraCl = $lieu;
       $client->save();
       return redirect('clients');
    }
    function readdata(){
        $pclient = client::all();
        return view('client',['data'=>$pclient]);
    }

}
