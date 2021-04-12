@extends('template')

@section('content')

<h1>Showing {{ $hotel->id }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $hotel->id }}</h2>
        <p>
            <strong>Name:</strong> {{ $hotel->name }}<br>
            <strong>Continent:</strong> {{ $hotel->continent }}<br>
            <strong>Tara:</strong> {{ $hotel->tara }}<br>
            <strong>Oras:</strong> {{ $hotel->oras }}<br>
            <strong>Adresa:</strong> {{ $hotel->adresa }}<br>
            <strong>Cont Bancar:</strong> {{ $hotel->cont_bancar }}<br>
        </p>
    </div>
@endsection
