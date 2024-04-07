<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetailesProduit;

class Produit extends Model
{
    use HasFactory;
    // public function detailesProduit(){
    //     return $this->hasMany(DetailesProduit::class, 'IDproduit');
    // }
}
