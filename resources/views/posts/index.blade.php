@extends('layouts.main')

@section('content')
    <h1>Post List</h1>
    <ul>
        @foreach($posts as $post)
            <li>{{ $post->title }} | by {{ $post->user->name }}</li>
        @endforeach
    </ul>
@endsection