@extends('layouts.main')

@section('content')
    <h1>Blog | Full Archive</h1>
    <ul>
        @foreach($posts as $post)
            <li><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a> | by <a href="{{ route('users.show', $post->user_id) }}">{{ $post->user->name }}</a></li>
        @endforeach
    </ul>
@endsection