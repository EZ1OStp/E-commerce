<?php

namespace App\Http\Repositories;
use App\Models\Produit;

class PanierSessionRepository implements PanierInterfaceRepository  {

	# Afficher le panier
	public function show () {
		return view("front.panier.show");
	}

	# Ajouter/Mettre à jour un produit du panier
	public function add (Produit $produit, $quantity) {
		$panier = session()->get("panier"); // On récupère le panier en session

		// Les informations du produit à ajouter
		$produit_details = [
			'title' => $produit->title,
			'price' => $produit->price,
			'quantity' => $quantity
		];

		$panier[$produit->id] = $produit_details; // On ajoute ou on met à jour le produit au panier
		session()->put("panier", $panier); // On enregistre le panier

	}

	# Retirer un produit du panier
	public function remove (Produit $produit) {
		$panier = session()->get("panier"); // On récupère le panier en session
		unset($panier[$produit->id]); // On supprime le produit du tableau $panier
		session()->put("panier", $panier); // On enregistre le panier
	}

	# Vider le panier
	public function empty () {
		session()->forget("panier"); // On supprime le panier en session
	}

}

?>
