@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Liste des Offres</h1>
                <a href="{{ route('offres.create') }}" class="btn btn-success">Créer Offre</a>



                <table class="table">
                    <thead>
                        <tr>
                            <th>Poste</th>
                            <th>Description</th>
                            <th>Entreprise Associée</th>
                            <th>Compétences</th>
                            <th>Emplacement</th>
                            <th>Date de Publication</th>
                            <th>Date de Clôture</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($offres as $offre)
                            <tr>
                                <td>{{ $offre->poste }}</td>
                                <td>{{ $offre->description }}</td>
                                <td>{{ $offre->entreprise->name }}</td>
                                <td>{{ $offre->competences }}</td>
                                <td>{{ $offre->emplacement }}</td>
                                <td>{{ $offre->date_de_publication }}</td>
                                <td>{{ $offre->date_de_cloture }}</td>
                                <td>
                                    <div class="d-flex">
                                        <form action="{{ route('offres.destroy', $offre->id) }}" method="post"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger mr-2">Supprimer</button>
                                        </form>
                                    </div>
                                    <td>
                                        <a href="{{ route('offres.edit', $offre->id) }}" class="btn btn-primary">Modifier</a>
                                        <!-- Ajoutez ici d'autres boutons d'action si nécessaire -->
                                    </td>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
