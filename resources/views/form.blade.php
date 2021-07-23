@extends('layout')

@section('title',isset($user) ?'Update'.$user->name :'Create user')

@section('content')
    <a type="button" class="btn btn-secondary" href="{{ route('users.index') }}">Back to users</a>
    <form method="POST" @if (isset($user))action="{{route("users.update", $user)}}"
          @else action="{{route("users.store")}} @endif">
        @isset($user)
            @method('PUT')
        @endisset
        @csrf
        <div class="row">
            <div class="col mt-3">
                <input name='name' value="{{isset($user) ? $user->name : null}}" type="text" class="form-control"
                       placeholder="First name" aria-label="Name">
            </div>
        </div>
        <div class="row">
            <div class="col mt-3">
                <input name="email" value="{{isset($user) ? $user->email : null}}" type="text" class="form-control"
                       placeholder="Last name" aria-label="Email">
            </div>
        </div>
        <div class="row">
            <button type="submit" class="btn btn-success">Create</button>
        </div>
    </form>
@endsection
