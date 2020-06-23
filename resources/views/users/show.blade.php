@extends('layouts.main')

@section('content')
    <h3>{{ $user->name }} | Info, Posts & Comments</h1>
    <h4>Email: <a href="mailto:{{ $user->email }}">{{ $user->email }}</a></h3>
    <hr>
    <h3>Posts by {{ $user->name }}</h3>
    <ul>
        @foreach($user->posts as $post)
            <li><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a> | Date: {{ $post->created_at }}</li>
        @endforeach
    </ul>
    <hr>
@endsection