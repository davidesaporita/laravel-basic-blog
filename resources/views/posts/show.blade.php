@extends('layouts.main')

@section('content')
    <h1>{{ $post->title }}</h1>
    <h3>{{ $post->user->name }}</h3>
    <p>{{ $post->body }}</p>
@endsection