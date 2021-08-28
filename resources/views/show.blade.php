@extends('layout');

@section('title', 'User '.$user->name)

@section('content')
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Id: {{ $user->id }}</li>
            <li class="list-group-item">Name: {{ $user->name }}</li>
            <li class="list-group-item">Email: {{ $user->email }}</li>
            <li class="list-group-item">Created: {{ $user->created_at->format('d/m/y H:i:s') }}</li>
            <li class="list-group-item">Updated: {{ $user->updated_at->format('d/m/y H:i:s') }}</li>
        </ul>
    </div>
    <div class="col mt-3">
        <a class="btn btn-danger" href="{{ route('users.index') }}">Back</a>
        <a class="btn btn-warning" type="button" href="{{ route('users.edit', $user) }}">Edit</a>
    </div>
@endsection
