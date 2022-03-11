@extends('front.layouts.front')

@section('content')
    @forelse ($produits as $produit)
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $produit->title }}</h5>
          <p class="card-text">{{ $produit->description }}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>

          <form method="POST" action="{{ route('panier.add', $produit) }}" class="form-inline d-inline-block" >
            @csrf
            <input type="number" name="quantity" placeholder="Quantité ?" class="form-control mr-2" >
            <button type="submit" class="btn btn-warning" >+ Ajouter au panier</button>
        </form>

        </div>
      </div>
    @empty

    @endforelse
@endsection
