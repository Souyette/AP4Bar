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
        $commandeContenu = [18 => 15,5 => 10,3 => 14];
        foreach ($commandeContenu as $produit => $qte){
        $this->commandeAfond($lastinsertID,$produit,$qte);
        }
    }

    public function commandeAfond($id,$contenu,$qte){
        $composer = new Composer();
            COMPOSER::create([
                $composer->IDCOMMANDE = $id,
                $composer->ID_PRODUIT = $contenu,
                $composer->QUANTITE = $qte,
            ]);
            $composer->save();
    }
}
