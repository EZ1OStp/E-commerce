<?php

namespace App\Http\Controllers\front;

use App\Models\Produit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = Produit::all();

        return view('front.produits.index', compact('produits'));
    }
    public function show($id)
    {
        $produit = produit::find($id);

        return view('front.produits.show', compact('produit'));
    }

}
