@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <a href="{{ route('categories.create') }}" class="btn btn-success">Create</a>

                    <div class="card-header">{{ __('') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Domaine</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                    <tr>
                                        <th scope="row">{{ $category->id }}</th>
                                        <td>{{ $category->domaine }}</td>
                                        <td>
                                            <!-- Delete Category Form -->
                                            <form action="{{ route('categories.destroy', $category->id) }}" method="post"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger">Delete</button>

                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2">No categories found</td>
                                    </tr>
                                @endforelse

                            </tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <!-- Other category data columns -->

                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
