
@extends('layouts.base')


@include('layouts.bootstrap')

@section('content')
<div class="h3">Modifer le produit : {{ $produit->title }}</div>



<div class="row">
    <div class="col-md-6 mx-auto">
        <form action="{{ route('produit.update', $produit->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom">Nom du produit</label>
                <input id="title" value="{{ $produit->title }}" class="form-control" type="text" name="title" required>
            </div>

            @if($errors->has('title'))
                <p class="text-danger">{{ $errors->first('title') }}</p>
            @endif

            <div class="form-group">
                <label for="my-input">Description</label>
                <textarea name="description" id="description" content="{{ $produit->description}}"class="form-control"  cols="30" rows="10" name="description"></textarea>

                {{-- <input type="text"  name="description" id="description" value="{{ $produit->description}}"class="form-control"  cols="30" rows="10" name="description"> --}}

            </div>

            @if($errors->has('description'))
                <p class="text-danger">{{ $errors->first('description') }}</p>
            @endif

            <div class="form-group">
                <label for="my-input">Prix</label>
                <input type="text" id="price" class="form-control" placeholder="€" value="{{ $produit->price }}" required inputmode="decimal" name="price">
            </div>

            @if($errors->has('price'))
                <p class="text-danger">{{ $errors->first('price') }}</p>
            @endif

            <div class="form-group">
                <label for="my-input">Quantité</label>
                <input name="quantite" type="number" id="quantite" value="{{ $produit->quantite }}" required class="form-control" inputmode="numeric">
            </div>

            @if($errors->has('quantite'))
                <p class="text-danger">{{ $errors->first('quantite') }}</p>
            @endif

            <div class="form-group">
                <label for="image">image</label>
                <input id="image" class="form-control" value="{{ $produit->image }}" type="file" name="image" >
            </div>
            <div class="form-group text-center">
                <button type="submit" class=" btn btn-success">Enregistrer</button>
            </div>

            @if($errors->has('image'))
            <p class="text-danger">{{ $errors->first('image') }}</p>
            @endif

        </form>
    </div>

</div>


@endsection

