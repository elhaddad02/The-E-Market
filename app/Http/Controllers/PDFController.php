<?php

namespace App\Http\Controllers;

use PDF;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    public function generatePDF($idU){

        // $clients=DB::select("select * from users where id=$idU");
        // $produitsCommander = DB::select("SELECT * from panier where idUser = $idU");
        $infos=DB::select("SELECT users.*, panier.*, commande.* FROM users INNER JOIN panier 
            ON users.id=panier.idUser INNER JOIN commande ON users.id=commande.idUser 
            WHERE users.id=$idU"
        );
        $data = [
            'title' => 'The E-Market',
        ];
           
        $pdf = PDF::loadView('myPDF', compact('infos'),$data);
    
        return $pdf->download('facteur.pdf');
    }
}
