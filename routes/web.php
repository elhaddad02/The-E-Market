<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\commandeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;

Route::get('/', function () {
    return view('welcome',[
        'user' => Auth::user()
    ]);
});
// ==== registre client (inserer les noveaux clients)==== //
Route::post('/addClient',[mycontroller::class,'addClient']);
// ==== login user ==== //
Route::post('/login',[UserController::class,'login']);
//----page login----//
Route::get('/login',function(){
    return view('login');
});
// ===== logout ===== //
Route::get('/logout',[mycontroller::class,'logout']);
// ==== login send email to reset password ====//
Route::get('/sendemail',function(){
    return view('email');
});
// afficher les produits de chaque ville
Route::get('/casablanca',[mycontroller::class,'afficherProduitCasa'])->name('login');
Route::get('/rabat',[mycontroller::class,'afficherProduitRabat'])->name('login');
Route::get('/tanger',[mycontroller::class,'afficherProduitTanger'])->name('login');

// ajouter produit au panier du client
Route::get('/addProduct/{idd}',[mycontroller::class,'ajouterProduitAuPanier']);
Route::get('/panier',[mycontroller::class,'panier'])->middleware('auth');

// supprimer produit du panier du client
Route::get('/supprimer/{id}',[mycontroller::class,'supprimer']);

/*********    partie admin     *********/

// login de admin
Route::get('/admin', [AdminController::class,'showLoginForm'])->name('admin.login');
Route::post('/dashboardadmin', [AdminController::class,'login'])->name('admin.login.submit');

// le nombre des clients 
Route::get('/dashboardadmin',[AdminController::class,'nombreClients']);

// ajouter produit au panier
Route::post('/ajouterProduit',[AdminController::class,'ajouterProduit']);

// afficher les produits du panier
Route::get('/productsadmin',[AdminController::class,'selectProduct']);

// afficher les clients 
Route::get('/clientsadmin',[AdminController::class,'selectclient']);
Route::get('/deleteclient/{idC}',[AdminController::class,'supprimerClient']);

Route::get('/delete/{id}',[AdminController::class,'delete']);
Route::get('/edit/{mat}',[AdminController::class,'editProduct']);
Route::PUT('/update',[AdminController::class,'updateProduct']);

// ========== panier au page Admin ======== //
Route::get('/panieradmin',[AdminController::class,'getPanier']);


// supprimer et modifier commande //
Route::get('/supprimercommande/{id}',[AdminController::class,'supprimerCommande']);

/* Localization Route */

Route::get("/locale/{lange}",[LocalizationController::class,'setLang']);

// Route::get('/greeting/{locale}', function (string $locale) {
//     if (! in_array($locale, ['en', 'es', 'fr'])) {
//         abort(400);
//     }
 
//     App::setLocale($locale);
 
//     // ...
// });


// Show the forgot password form //
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

// Send password reset email //
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Show the reset password form //
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');

// Reset password //
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

Auth::routes();

Route::post('/login',[UserController::class,'login']);


Route::middleware(['admin'])->group(function () {
    // Routes pour les vues restreintes à l'administrateur
    Route::get('/products', [AdminController::class,'selectProduct']);
    Route::get('/commandes',[AdminController::class,'getPanier']);
    Route::get('/clients', [AdminController::class,'selectclient']);
    Route::get('/dashboardadmin',[AdminController::class,'nombreClients']);
    Route::get('/commandevalideradmin',[commandeController::class,'selectcommandevalider']);

});


// PDF Route //
Route::get('generate-pdf/{idU}', [PDFController::class, 'generatePDF']);

//commande valider
Route::get('/commandevalider',[commandeController::class,'commandeForm']);
Route::post('/insertCommande',[commandeController::class,'insertCommande']);
// Route::get('/commandeadmin',[])
// Route::get('/commandevalideradmin',[commandeController::class,'commandeadmin']);


