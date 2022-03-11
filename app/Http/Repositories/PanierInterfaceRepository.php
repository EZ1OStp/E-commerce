<?php

namespace App\Http\Repositories;

use App\Models\Produit;

interface PanierInterfaceRepository {

	// Afficher le panier
	public function show();

	// Ajouter un produit au panier
	public function add(Produit $produit, $quantity);

	// Retirer un produit du panier
	public function remove(Produit $produit);

	// Vider le panier
	public function empty();

}

?>
