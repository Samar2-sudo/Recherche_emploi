@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update Offre') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('offres.update', $offre->id) }}">
                            @csrf
                            @method('PUT') {{-- Utilisez la méthode PUT pour la mise à jour --}}

                            <div class="mb-3">
                                <label for="poste" class="form-label">{{ __('Poste') }}</label>
                                <input type="text" class="form-control @error('poste') is-invalid @enderror"
                                    id="poste" name="poste" value="{{ old('poste', $offre->poste) }}" required>
                                @error('poste')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">{{ __('Description') }}</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" required>{{ old('description', $offre->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="entreprise_associee" class="form-label">{{ __('Entreprise Associée') }}</label>
                                <select class="form-control @error('entreprise_associee') is-invalid @enderror"
                                    id="entreprise_associee" name="entreprise_associee" required>
                                    @foreach ($entreprises as $entrep)
                                        <option value="{{ $entrep->id }}"
                                            {{ old('entreprise_associee', $offre->entreprise_associee) == $entrep->id ? 'selected' : '' }}>
                                            {{ $entrep->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('entreprise_associee')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="categorie_id" class="form-label">{{ __('Catégorie') }}</label>
                                <select class="form-control @error('categorie_id') is-invalid @enderror" id="categorie_id"
                                    name="categorie_id" required>
                                    {{-- Populate the dropdown with categorie options --}}
                                    @foreach ($categories as $categorie)
                                        <option value="{{ $categorie->id }}"
                                            {{ old('categorie_id', $offre->categorie_id) == $categorie->id ? 'selected' : '' }}>
                                            {{ $categorie->domaine }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('categorie_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="competences" class="form-label">{{ __('Compétences') }}</label>
                                <input type="text" class="form-control @error('competences') is-invalid @enderror"
                                    id="competences" name="competences" value="{{ old('competences', $offre->competences) }}" required>
                                @error('competences')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="emplacement" class="form-label">{{ __('Emplacement') }}</label>
                                <input type="text" class="form-control @error('emplacement') is-invalid @enderror"
                                    id="emplacement" name="emplacement" value="{{ old('emplacement', $offre->emplacement) }}" required>
                                @error('emplacement')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="date_de_publication" class="form-label">{{ __('Date de Publication') }}</label>
                                <input type="date"
                                    class="form-control @error('date_de_publication') is-invalid @enderror"
                                    id="date_de_publication" name="date_de_publication"
                                    value="{{ old('date_de_publication', $offre->date_de_publication) }}" required>
                                @error('date_de_publication')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="date_de_cloture" class="form-label">{{ __('Date de Clôture') }}</label>
                                <input type="date" class="form-control @error('date_de_cloture') is-invalid @enderror"
                                    id="date_de_cloture" name="date_de_cloture" value="{{ old('date_de_cloture', $offre->date_de_cloture) }}"
                                    required>
                                @error('date_de_cloture')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Update Offre') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
