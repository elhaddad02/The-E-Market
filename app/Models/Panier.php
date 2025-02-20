<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;
    protected $table = 'panier';
    protected $fillable = ['imageProduit', 'nomProduit', 'prixProduit', 'idProduit', 'idUser', 'quantiteProduit', 'totalProduit'];
    public $timestamps = False;
}
