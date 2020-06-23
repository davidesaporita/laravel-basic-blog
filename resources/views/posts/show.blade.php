@extends('layouts.main')

@section('content')
    <h1>{{ $post->title }}</h1>
    <h3><a href="{{ route('users.show', $post->user) }}">{{ $post->user->name }}</a></h3>
    <p>{{ $post->body }}</p>
@endsection