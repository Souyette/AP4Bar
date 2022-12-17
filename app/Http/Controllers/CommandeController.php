<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\COMPOSER;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function ajoutCommande(Request $request){
        $commande = new Commande();
        $commande->HEURECOMMANDE = now();
        $commande->save();
        $lastinsertID = $commande->IDCOMMANDE;
        $composer = new Composer();
        $composer->IDCOMMANDE = $lastinsertID;
        $composer->ID_PRODUIT = $request->idP;
        $composer->QUANTITE = $request->qte;
        $composer->save();
        return response()->json($commande,$composer);

    }
}
