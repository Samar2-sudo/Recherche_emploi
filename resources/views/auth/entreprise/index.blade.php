@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Liste des Entreprises</h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($entreprises as $entreprise)
                            <tr>
                                <td>{{ $entreprise->name }}</td>
                                <td>{{ $entreprise->email }}</td>
                                <td>
                                    <!-- Add action buttons for each entreprise -->
                                    <a href="{{ route('entreprise.edit', $entreprise->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('entreprise.destroy', $entreprise->id) }}" method="post"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
