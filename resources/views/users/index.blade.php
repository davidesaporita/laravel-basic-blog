@extends('layouts.main')

@section('content')
    <h1>Authors List</h1>
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }} | {{ $user->email }}</li>
        @endforeach
    </ul>
@endsection