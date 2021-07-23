{{--Connect loayaut--}}
@extends('layout')

@section('title', 'Users')

@section('content')
    {{--User Create--}}
    <a class="btn btn-success" href="{{route("users.create")}}">Create User</a>
    {{--User Create--}}
    {{--Table--}}
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
        {{--Foreach data--}}
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                <form method="POST" action="{{route('users.destroy',$user)}}">
                    <a class="btn btn-info" href="{{route('users.edit', $user)}}">edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form></td>
            </tr>
        @endforeach
        {{--Foreach data--}}
        </tbody>
    </table>
    {{--Table--}}
    {{$users->links()}}
@endsection
{{--Close section--}}

