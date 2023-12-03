<!-- resources/views/categories/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Category') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('categories.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="domaine"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Domaine') }}</label>
                                <div class="col-md-6">
                                    <input id="domaine" type="text"
                                        class="form-control @error('domaine') is-invalid @enderror" name="domaine"
                                        value="{{ old('domaine') }}" required autofocus>

                                    @error('domaine')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create Category') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
