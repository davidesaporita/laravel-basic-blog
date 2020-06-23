@extends('layouts.main')

@section('content')
    <h1>Authors List</h1>
    <ul>
        @foreach($users as $user)
            <li><a href="{{ route('users.show', $user) }}">{{ $user->name }}</a> | {{ $user->email }}</li>
        @endforeach
    </ul>
@endsection