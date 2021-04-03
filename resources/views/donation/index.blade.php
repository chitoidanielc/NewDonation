@extends('template')

@section('content')

<h1>Donators List</h1>


@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Id</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Weight</td>
            <td>Blood Type</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($donations as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->fname }}</td>
            <td>{{ $value->lname }}</td>
            <td>{{ $value->weight }}</td>
            <td>{{ $value->blood_type }}</td>
            <td>
                <div class="inline">
                    <a class="mgr-5 btn btn-small btn-success" href="{{ URL::to('donation/' . $value->id) }}">Show donation</a>
                    <a class="mgr-5 btn btn-small btn-info" href="{{ URL::to('donation/' . $value->id . '/edit') }}">Edit donation</a>
                    <form action="{{ URL::route('donation.destroy', $value->id) }}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="btn btn-small btn-danger">Delete Donation</button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection


