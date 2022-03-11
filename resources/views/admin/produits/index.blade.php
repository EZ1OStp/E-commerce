<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('produit list') }}
        </h2>
    </x-slot>

    <div class="py-12 mx-100">

        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Liste des utilisateurs
                </div>
            </div>
        </div> --}}


    {{-- ces imports ne devraient pas être là. --}}

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{asset('js/tableproduit.js')}}"></script>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a class="btn btn-primary mb-2 ml-20" href="{{ route('produit.create') }}">+Ajouter</a>
            <table class="table table-bordered" id="tabproduit">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Titre</th>
                        <th>Quantité en stock</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($produits as $produit)
                    <tr>
                        <td>{{ $produit->id }}</td>
                        <td><img src="images/{{ $produit->image }}" alt="image non chargé" height="40px" width="40px"></td>
                        <td class="mx-auto">{{ $produit->title }}</td>
                        <td>{{ $produit->quantite }}</td>
                        <td>
                            <form action="{{ route('produit.destroy',$produit->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-warning btn-sm" href="{{ route('produit.edit',$produit->id) }}">Editer</a>
                                <input type="submit" value="Supprimer" class="btn btn-danger btn-sm">
                                <a class="btn btn-secondary btn-sm" href="{{ route('produit.show',$produit->id) }}">Voir</a>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">
                            <div class="alert alert-warning">
                                Aucune données disponible
                            </div>
                        </td>
                    </tr>
                    @endforelse


                </tbody>
            </table>

                {{-- {{ $produits->links() }} --}}


    </div>


    </div>
</x-app-layout>
