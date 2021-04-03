@extends('template')

@section('content')

<h1>Create a donation</h1>

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

{{ Form::open(array('url' => 'donation')) }}

    <div class="form-group">
        {{ Form::label('fname', 'First Name') }}
        {{ Form::text('fname', old('fname'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('lname', 'Last Name') }}
        {{ Form::text('lname', old('lname'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('weight', 'Weight') }}
        {{ Form::number('weight', old('weight'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('blood_type', 'Blood Type') }}
        {{ Form::select('blood_type', array('0' => '01', 'A' => 'A1', 'B' => 'B1', 'AB' => 'AB'), old('blood_type'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create the donation!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
