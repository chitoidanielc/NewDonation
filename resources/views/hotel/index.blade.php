@extends('template')

@section('content')

<h1>Hotels List</h1>


@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Continent</td>
            <td>Tara</td>
            <td>Oras</td>
            <td>Adresa</td>
            <td>Cont Bancar</td>
        </tr>
    </thead>
    <tbody>
    @foreach($hotels as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->continent }}</td>
            <td>{{ $value->tara }}</td>
            <td>{{ $value->oras }}</td>
            <td>{{ $value->adresa }}</td>
            <td>{{ $value->cont_bancar }}</td>
            <td>
                <div class="inline">
                    <a class="mgr-5 btn btn-small btn-success" href="{{ URL::to('hotel/' . $value->id) }}">Show Hotel</a>
                    <a class="mgr-5 btn btn-small btn-info" href="{{ URL::to('hotel/' . $value->id . '/edit') }}">Edit Hotel</a>
                    <form action="{{ URL::route('hotel.destroy', $value->id) }}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="btn btn-small btn-danger">Delete Hotel</button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection


