@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $country->name }}</h1>

        <p><strong>Description:</strong> {{ $country->description }}</p>
        <p><strong>Position:</strong> {{ $country->position }}</p>

        <a href="{{ route('countries.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection
