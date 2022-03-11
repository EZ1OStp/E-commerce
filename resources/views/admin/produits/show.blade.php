@extends('layouts.base')
@include('layouts.bootstrap')
@section('content')


<div class="row" style="margin-top:10%">
    <div class="col-md-4 mb-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex flex-column align-items-center text-center">
            <img src="/images/{{ $produit->image }}" alt="Image non chargé" class="" height="150" width="150">
            <div class="mt-3">
              <h4>produit:</h4>
              <p class="text-secondary mb-1">{{ $produit->title}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-8">
      <div class="card mb-3">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Description</h6>
            </div>
            <div class="col-sm-9 text-secondary">
            {{$produit->description}}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Prix</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              {{ $produit->price. '€'  }}
            </div>
          </div>

          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Quantité en stock</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              {{ $produit->quantite. ' unités'  }}
            </div>
          </div>

          <hr>
          <div class="row">
            <div class="col-sm-12">
              <a class="btn btn-info " href="{{ route('produit.index') }}">Revenir à la liste</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>



@endsection



