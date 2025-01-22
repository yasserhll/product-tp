@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Countries</h1>

        <a href="{{ route('countries.create') }}" class="btn btn-primary mb-3">Add New Country</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Position</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($countries as $country)
                    <tr>
                        <td>{{ $country->name }}</td>
                        <td>{{ $country->description }}</td>
                        <td>{{ $country->position }}</td>
                        <td>
                            <a href="{{ route('countries.show', $country) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('countries.edit', $country) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('countries.destroy', $country) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this country?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination Links -->
        <div class="d-flex justify-content-center">
            {{ $countries->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
