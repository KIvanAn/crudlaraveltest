@extends('layout')

@section('title', 'User ' . $user->name)
@section('content')
<div class="mt-2 mb-4">
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to users</a>
</div>
<div class="card" style="width: 20rem;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><strong>Id:</strong> {{ $user->id }}</li>
        <li class="list-group-item"><strong>Name:</strong> {{ $user->name }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
        <li class="list-group-item"><strong>Created:</strong> {{ $user->created_at->format('d/m/y H:m:s') }}</li>
        <li class="list-group-item"><strong>Updated:</strong> {{ $user->updated_at->format('d/m/y H:m:s') }}</li>
    </ul>
</div>
<div class="mt-4">
    <a href="{{ route('users.edit', $user) }}" class="btn btn-success">Edit</a>
</div>
@endsection
