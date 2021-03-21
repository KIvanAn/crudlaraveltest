@extends('layout')

@section('title', 'Users')
@section('content')
<div class="mb-3">
    <a href="{{ route('users.create') }}" class="btn btn-primary">Create user</a>
</div>

<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>
                        <a href="{{ route('users.show', $user) }}">{{ $user->name }}</a>
                    </td>
                    <td>
                        <a href="{{ route('users.show', $user) }}">{{ $user->email }}</a>
                    </td>
                    <td>
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-success">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
