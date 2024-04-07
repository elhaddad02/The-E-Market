<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
// use App\Models\Produit;
// use App\Models\DetailesProduit;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }
    public function login(Request $request){
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            // si l'authentification de l'administrateur est réussie
            return redirect('dashboardadmin');

        } else {
            // si l'authentification a échoué, rediriger vers le formulaire de connexion avec un message d'erreur
            return redirect()->route('admin.login')->with('error', 'Invalid credentials');
        }
    }
   
    public function ajouterProduit(Request $req){
        DB::insert("INSERT INTO produits(`description`, `nom`, `prix`,`image`, `sexe`,`stock`) 
            VALUES('$req->description', '$req->nom', '$req->prix','$req->image', '$req->sexe','$req->stock')");
        $id_p = DB::select("SELECT id FROM produits ORDER BY id DESC LIMIT 1");
        $id_p = $id_p[0]->id; 
        $ville = [];
        if(isset($req->casablanca)){
            array_push($ville,$req->casablanca);
        }
        if(isset($req->rabat)){
            array_push($ville,$req->rabat);
        }
        if(isset($req->tanger)){
            array_push($ville,$req->tanger);
        }
        foreach($ville as $v){
            // return($v);
            DB::insert("INSERT INTO detailesProduit(`IDproduit`,`idVille`) VALUES($id_p, $v )");

        }
        return redirect()->back(); 	
    }

    public function selectProduct(){       
       
        $produits = DB::select("SELECT produits.id, produits.image, produits.nom, produits.description, produits.prix, produits.sexe, produits.stock,
        GROUP_CONCAT(ville.nomVille SEPARATOR ', ') AS villes
        FROM produits
        LEFT JOIN detailesproduit ON produits.id = detailesproduit.IDproduit
        LEFT JOIN ville ON detailesproduit.idVille = ville.idVille
        GROUP BY produits.id, produits.image, produits.nom, produits.description, produits.prix, produits.sexe, produits.stock");
        
        return view('admin.AdminProducts',compact('produits'));
        // return $produits;
    }

    public function selectclient(){
        $clients=DB::select("select * from users");
        return view('admin.clients',[...compact('clients'),'admin' => auth()->user()]);
    }
    public function supprimerClient($idC){
        DB::delete("delete from users where id=$idC");
        return redirect('clients');
    }
    public function delete($id){
        DB::delete("delete from produits where id=$id");
        return redirect('products');
    }
    // public function delete($id){
    //     $produit = Produit::find($id);
    
    //     if($produit){
    //         $produit->detailesProduit()->delete();
    //         $produit->delete();
    //     }
    
    //     return redirect('products');
    // }
    public function editProduct($mat){
        $prd=DB::select("select * from produits where id=$mat");
        return view('admin.editProduct',compact('prd'));
    }
    public function updateProduct(Request $r){
        DB::update("UPDATE produits SET `id`=$r->id, `description`='$r->description', `nom`='$r->nom', `prix`=$r->prix, `sexe`='$r->sexe' where `id`=$r->id");
        return redirect('products');
    }  
    public function getPanier(){
        // $panier = DB::table('panier')->get();
        $panier = DB::select("SELECT *from panier");
        return view('admin.panier',compact('panier'));
        // return $commandes;
    }
    public function supprimerCommande($id){
        // DB::table('panier')->where('id','=',$id)->Delete();
        DB::delete("delete from panier where id = $id");
        return redirect('panier');
    }
    
    // public function produitsEnStock(){
    //     $stock=DB::select('SELECT sum(stock) as allStock FROM `produits` ');
    //     return view('test',compact('stock'));
    // }
    public function nombreClients(){
        $stock=DB::select('SELECT sum(stock) as allStock FROM `produits` ');
        $nbrClients=DB::select('SELECT count(*) as AllUsers FROM `users` ') ;
        return view('admin.test',[...compact('nbrClients','stock'),'admin' => auth()->user()]);
    }

}
