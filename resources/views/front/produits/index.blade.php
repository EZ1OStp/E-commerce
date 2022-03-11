@extends('front.layouts.front')

@section('content')
    @forelse ($produits as $produit)


      <div class="col">
        <div class="card shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $produit->title }}</text></svg>

          <div class="card-body">
            <p class="card-text">{{ $produit->description }}</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href=""></a></button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
              </div>
              <small class="text-muted">{{ $produit->price.'€' }}</small>
            </div>
            <form method="POST" action="{{ route('panier.add', $produit) }}" class="" >
                @csrf
                <input type="number" name="quantity" inputmode='numeric' value="1" placeholder="Quantité ?" class="" >
                <button type="submit" class="w-100 btn btn-light " >+ Ajouter au panier</button>
            </form>
          </div>
        </div>
      </div>

    @empty

    Aucun produit pour le moment

    @endforelse
@endsection
