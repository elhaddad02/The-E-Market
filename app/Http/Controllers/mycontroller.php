<?php

namespace App\Http\Controllers;
use App\Models\Panier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class mycontroller extends Controller
{
    public function casablanca(){
        
        return view('casablanca');
    }
    public function rabat(){
        return view('rabat');
    }
    public function tanger(){
        return view('tanger');
    }

    public function addClient(Request $r){
        $validatedData = $r->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:8|max:255|confirmed'
        ]);
        $hashedPassword = Hash::make($r->password);
        DB::insert("INSERT INTO users (`username`, email, `password`) 
            values('$r->username','$r->email','$hashedPassword')");
        return response()->json(['success' => true]);
    }

    public function supprimer($id){
        DB::DELETE("DELETE from panier where id=$id");
        return redirect('panier');
    }
    public function afficherProduitCasa(){
        $product=DB::select("SELECT detailesproduit.idVille , ville.nomVille, produits.* 
                            FROM (detailesproduit INNER JOIN ville ON ville.idVille = detailesproduit.idVille) 
                            inner JOIN produits ON produits.id=detailesproduit.IDproduit where ville.nomVille='casablanca';");
        return view('casablanca',[...compact('product'), 'user' => Auth::user()]);
    }
    public function afficherProduitRabat(){
        $product=DB::select("SELECT detailesproduit.idVille , ville.nomVille, produits.* 
                            FROM (detailesproduit INNER JOIN ville ON ville.idVille = detailesproduit.idVille) 
                            inner JOIN produits ON produits.id=detailesproduit.IDproduit where ville.nomVille='rabat';");
        return view('rabat',[...compact('product'), 'user' => Auth::user()]);
    }
    public function afficherProduitTanger(){
        $product=DB::select("SELECT detailesproduit.idVille , ville.nomVille, produits.* 
                            FROM (detailesproduit INNER JOIN ville ON ville.idVille = detailesproduit.idVille) 
                            inner JOIN produits ON produits.id=detailesproduit.IDproduit where ville.nomVille='tanger';");
        return view('tanger',[...compact('product'), 'user' => Auth::user()]);
    }

    public function ajouterProduitAuPanier($id){
        if(auth()->user()!==null){
        // $show=DB::select("SELECT detailesproduit.idVille , ville.nomVille, produits.* FROM (detailesproduit 
        //                 INNER JOIN ville ON ville.idVille = detailesproduit.idVille)
        //                 inner JOIN produits ON produits.id = detailesproduit.IDproduit where produits.id = '$id' ");
        $show=DB::select("SELECT * FROM produits where id=$id");
        // dd($show);
        // $id = $show[0]->id;
        // $image = $show[0]->image;
        // $nom = $show[0]->nom;
        $prix = $show[0]->prix;
        // $ville = $show[0]->nomVille;
        // dd($nom);
        // $idUser = Auth::id();
        // DB::insert("INSERT INTO `panier`(id,`imageProduit`, `nomProduit`, `prixProduit`,`idProduit`) 
        // VALUES (2,Null,'$nom',300, 1 ");      

        $count = DB::select("select count(*) as count from panier where idProduit=$id");

        if(($count[0]->count)!=0){
            DB::update("UPDATE panier set quantiteProduit=quantiteProduit+1 where idProduit=$id"); 
            $QP = DB::select("select quantiteProduit from panier where idProduit=$id");
            $quantite=$QP[0]->quantiteProduit;
            DB::update("UPDATE panier set totalProduit = $quantite*$prix where idProduit=$id");
        } else {
            Panier::create([
                'imageProduit' => $show[0]->image,
                'nomProduit' => $show[0]->nom,
                'prixProduit' => $show[0]->prix,
                'idProduit' => $show[0]->id,
                'idUser' => Auth::id(),
                'quantiteProduit' => 1,
                'totalProduit' => ($show[0]->prix )*1
            ]);
        }
        return back();
        }else{
            return redirect('/login');
        }
    }

    public function panier(){
        $idUserConneter=Auth::id();
        // $products = DB::select("SELECT * from panier where idUser = $idUserConneter");
        $products=Panier::where('idUser',$idUserConneter)->get();
        $totalpanier=DB::select("SELECT SUM(totalProduit) AS TotalGeneralProduits FROM panier where idUser=$idUserConneter");
        // return view('panier');
        return view('panier',compact('products', 'totalpanier'));
    }

    public function logout(){
        
        Session::flush();
        
        Auth::logout();
        
        return to_route('login');
    }
}

