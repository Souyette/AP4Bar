<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BAR extends Controller
{
    public function listbar(Request $request,$type){
        //Création format JSON pour API
        //return response()->json(\App\Models\BAR::with('typebar')->get());
        return response()->json(\App\Models\BAR::where('id_type',$type)->with('typebar')->get());
    }

    public function BarInfo($idBar){
        //Création format JSON pour API
        return response()->json(\App\Models\BAR::where('ID_BAR',$idBar)->with('stocker')->with('typebar')->get());
    }
}
