@extends('template')

@section('content')

<h1>Edit {{ $donation->id }}</h1>

<!-- if there are creation errors, they will show here -->
{{-- {{ HTML::ul($errors->all()) }} --}}

{{ Form::model($donation, array('route' => array('donation.update', $donation->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('fname', 'First Name') }}
        {{ Form::text('fname', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('lname', 'Last Name') }}
        {{ Form::text('lname', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('weight', 'Weight') }}
        {{ Form::number('weight', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('blood_type', 'Blood Type') }}
        {{ Form::select('blood_type', array('0' => '01', 'A' => 'A1', 'B' => 'B1', 'AB' => 'AB'), old('blood_type'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the donation!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@endsection
