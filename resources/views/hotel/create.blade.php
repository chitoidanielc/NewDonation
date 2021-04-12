@extends('template')

@section('content')

<h1>Create a hotel</h1>

<!-- if there are creation errors, they will show here -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::open(array('url' => 'hotel')) }}

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

    {{ Form::submit('Create the hotel!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
