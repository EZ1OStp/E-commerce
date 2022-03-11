
@extends('layouts.base')


@include('layouts.bootstrap')

@section('content')
<div class="h3">Ajouter produit</div>



<div class="row">
    <div class="col-md-6 mx-auto">
        <form action="{{ route('produit.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nom">Nom du produit</label>
                <input id="title" class="form-control" type="text" name="title">
            </div>

            @if($errors->has('title'))
                <p class="text-danger">{{ $errors->first('title') }}</p>
            @endif

            <div class="form-group">
                <label for="my-input">Description</label>
                <textarea name="description" id="description" class="form-control" cols="30" rows="10" name="description"></textarea>
            </div>

            @if($errors->has('description'))
                <p class="text-danger">{{ $errors->first('description') }}</p>
            @endif

            <div class="form-group">
                <label for="my-input">Prix</label>
                <input type="text" id="price" class="form-control" placeholder="€" inputmode="decimal" name="price">
            </div>

            @if($errors->has('price'))
                <p class="text-danger">{{ $errors->first('price') }}</p>
            @endif

            <div class="form-group">
                <label for="my-input">Quantité</label>
                <input value='0' name="quantite" type="number" id="quantite" class="form-control" inputmode="numeric">
            </div>

            @if($errors->has('quantite'))
                <p class="text-danger">{{ $errors->first('quantite') }}</p>
            @endif

            <div class="form-group">
                <label for="image">image</label>
                <input id="image" class="form-control" type="file" name="image">
            </div>
            <div class="form-group text-center">
                <button type="submit" class=" btn btn-success">Enregistrer</button>
            </div>
        </form>
    </div>

</div>


@endsection

