@extends('template')

@section('content')

<h1>Edit {{ $hotel->id }}</h1>

<!-- if there are creation errors, they will show here -->
{{-- {{ HTML::ul($errors->all()) }} --}}

{{ Form::model($hotel, array('route' => array('hotel.update', $hotel->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('continent', 'Continent') }}
        {{ Form::text('continent', old('continent'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('tara', 'Tara') }}
        {{ Form::text('tara', old('tara'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('oras', 'Oras') }}
        {{ Form::text('oras', old('oras'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('adresa', 'Adresa') }}
        {{ Form::text('adresa', old('adresa'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('cont_bancar', 'Cont Bancar') }}
        {{ Form::text('cont_bancar', old('cont_bancar'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the hotel!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@endsection
