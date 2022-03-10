<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User list') }}
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
    <script type="text/javascript" src="{{asset('js/tableuser.js')}}"></script>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a class="btn btn-primary mb-2 ml-20" href="{{ route('user.create') }}">+Ajouter</a>
            <table class="table table-bordered" id="tabuser">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td class="mx-auto">{{ $user->firstname . ' ' . $user->lastname}}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <form action="{{ route('user.destroy',$user->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-warning btn-sm" href="{{ route('user.edit',$user->id) }}">Editer</a>
                                <input type="submit" value="Supprimer" class="btn btn-danger btn-sm">
                                <a class="btn btn-secondary btn-sm" href="{{ route('user.show',$user->id) }}">Voir</a>
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

                {{ $users->links() }}


    </div>


    </div>
</x-app-layout>
