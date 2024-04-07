<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class commandeController extends Controller
{
    public function commandeForm(){
        return view('commandeValider');
    }
    public function insertCommande(Request $request){
        // return 'insert commande';
        $idUserConneter=Auth::id();
        $totalCommande=DB::select("SELECT sum(totalProduit) as TotalCommande from panier where idUser=$idUserConneter")[0]->TotalCommande;
        
        $commandeValider=DB::insert("INSERT INTO `commande`(`dateCommande`, `nomClient`, `prenomClient`, `paysClient`,
        `villeClient`, `emailClient`, `telephoneClient`, `adresseClient`, `codePostale`, `cinClient`, `idUser`,`totalCommande`) 
        VALUES (CURDATE(),'$request->nom','$request->prenom','$request->pays','$request->ville','$request->email',
        $request->telephone,'$request->adresse',$request->codepostale,'$request->cin',$idUserConneter,$totalCommande)");
        return redirect('panier');
    }
    public function commandeadmin(){
        return view('admin.commandeValiderAdmin');
    }
    public function selectcommandevalider(){
        $commandesV=DB::select("select * from commande");
        return view('admin.commandeValiderAdmin',compact('commandesV'));
    }
}
