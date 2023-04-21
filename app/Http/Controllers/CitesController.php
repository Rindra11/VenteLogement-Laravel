<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cites;

class CitesController extends Controller
{
    function cites (Request $req){
        $identite = $req->get('IdC');
        $libelle = $req->get('LibelleC');
        $identiteA = $req->get('IdA');


        $cite = new cites();
        $cite->IdC = $identite;
        $cite->LibelleC = $libelle;
        $cite->IdA = $identiteA;
        $cite->save();
        return redirect('cites');
     }
     function readdata(){
         $pcites = cites::all();
         return view('cites',['data'=>$pcites]);
     }

}
