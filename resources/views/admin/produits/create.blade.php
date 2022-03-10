@include('layouts.bootstrap')

    <div class="h3">Ajouter produit</div>



    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="{{ route('produit.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nom">Nom du produit</label>
                    <input id="nom" class="form-control" type="text" name="title">
                </div>

                @if($errors->has('title'))
                    <p class="text-danger">{{ $errors->first('title') }}</p>
                @endif

                <div class="form-group">
                    <label for="my-input">Description</label>
                    <textarea name="description" id="" class="form-control" cols="30" rows="10" name="description"></textarea>
                </div>

                @if($errors->has('description'))
                    <p class="text-danger">{{ $errors->first('description') }}</p>
                @endif

                <div class="form-group">
                    <label for="my-input">price</label>
                    <input type="text" id="price" class="form-control" inputmode="decimal" name="price">
                </div>

                @if($errors->has('price'))
                    <p class="text-danger">{{ $errors->first('price') }}</p>
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



