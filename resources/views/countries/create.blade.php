@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Country</h1>

        <form action="{{ route('countries.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <input type="number" name="position" id="position" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
