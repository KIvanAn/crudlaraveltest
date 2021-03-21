@extends('layout')

@section('title', isset($user) ? 'Update user ' . $user->name : 'Create user')
@section('content')
<div class="mt-2 mb-4">
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to users</a>
</div>
<form
    @if(isset($user))
        action="{{ route('users.update', $user) }}"
    @else
        action="{{ route('users.store') }}"
    @endif method="POST">
    @if(isset($user))
        @method('PUT')
    @endif
    @csrf
    <div class="row">
        <div class="col">
            <input value="{{ old('name', isset($user) ? $user->name : null) }}" name="name" type="text" class="form-control" placeholder="Name" aria-label="Name">
            @error('name')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="col">
            <input value="{{ old('email', isset($user) ? $user->email : null) }}" name="email" type="text" class="form-control" placeholder="Email" aria-label="Email">
            @error('email')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="col">
            <button type="submit" class="btn btn-primary">
                @if(isset($user))
                Update
                @else
                Create
                @endif
            </button>
        </div>
    </div>
</form>
@endsection
