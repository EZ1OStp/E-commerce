<?php

namespace App\Http\Repositories;
use App\Models\Produit;

class PanierSessionRepository implements PanierInterfaceRepository  {

	# Afficher le panier
	public function show () {
		return view("basket.show"); // resources\views\basket\show.blade.php
	}

	# Ajouter/Mettre à jour un produit du panier
	public function add (Produit $produit, $quantity) {
		$basket = session()->get("basket"); // On récupère le panier en session

		// Les informations du produit à ajouter
		$produit_details = [
			'name' => $produit->name,
			'price' => $produit->price,
			'quantity' => $quantity
		];

		$basket[$produit->id] = $produit_details; // On ajoute ou on met à jour le produit au panier
		session()->put("basket", $basket); // On enregistre le panier
	}

	# Retirer un produit du panier
	public function remove (Produit $produit) {
		$basket = session()->get("basket"); // On récupère le panier en session
		unset($basket[$produit->id]); // On supprime le produit du tableau $basket
		session()->put("basket", $basket); // On enregistre le panier
	}

	# Vider le panier
	public function empty () {
		session()->forget("basket"); // On supprime le panier en session
	}

}

?>
