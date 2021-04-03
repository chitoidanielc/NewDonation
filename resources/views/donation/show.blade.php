@extends('template')

@section('content')

<h1>Showing {{ $donation->id }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $donation->id }}</h2>
        <p>
            <strong>First Name:</strong> {{ $donation->fname }}<br>
            <strong>Last Name:</strong> {{ $donation->lname }}<br>
            <strong>Weight:</strong> {{ $donation->weight }}<br>
            <strong>Blood Type:</strong> {{ $donation->blood_type }}<br>
        </p>
    </div>
@endsection
