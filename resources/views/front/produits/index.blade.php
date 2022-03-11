@extends('front.layouts.front')

@section('content')
    @forelse ($produits as $produit)


      <div class="col">
        <div class="card shadow-sm">

            <img src="{{ asset('images/'.$produit->image) }}" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="">
            <h2 class="mx-auto" >{{ $produit->title }}</h2>

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
