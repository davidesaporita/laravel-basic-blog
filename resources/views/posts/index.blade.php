@extends('layouts.main')

@section('content')
    <h1>Post List</h1>
    <ul>
        @foreach($posts as $post)
            <li><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a> | by {{ $post->user->name }}</li>
        @endforeach
    </ul>
@endsection