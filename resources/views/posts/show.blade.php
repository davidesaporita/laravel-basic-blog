@extends('layouts.main')

@section('content')
    <h1>{{ $post->title }}</h1>
    <h3><a href="{{ route('users.show', $post->user) }}">{{ $post->user->name }}</a></h3>
    <p>{{ $post->body }}</p>
    <hr>
    <h4>Comments</h4>
    <ul>
        @foreach($comments as $comment)
            <li>
                <h4>{{ $comment->title }}</h4>
                <p>{{ $comment->body }}</p> 
                <span>Author: 
                    <a href="{{ route('users.show', $comment->user) }}">{{ $comment->user->name }}</a>
                </span>
                <br>
                <span>Created at: {{ $comment->created_at }}</span>
            </li>
        @endforeach
    </ul>
@endsection