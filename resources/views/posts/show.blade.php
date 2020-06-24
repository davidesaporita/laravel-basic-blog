@extends('layouts.main')

@section('content')
    <h1>{{ $post->title }}</h1>
    <h4>
        Author: <a href="{{ route('users.show', $post->user) }}">{{ $post->user->name }}</a>
    </h4>
    <h5>Tags:
        @forelse($post->tags as $tag)
            <span>{{ $tag->name }}</span>
            @if(! $loop->last) 
                <span>|</span>
            @endif
        @empty
            <span>No Tags defined</span>
        @endforelse
    </h4>    
    <p>{{ $post->body }}</p>
    <hr>
    <h5>Comments</h5>
    <ul>
        @foreach($comments as $comment)
            <li>
                <h6>{{ $comment->title }}</h6>
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