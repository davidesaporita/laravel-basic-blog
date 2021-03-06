@extends('layouts.main')

@section('content')

    <h1 class="mb-4">Edit post {{ $post->title }}</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('patch')

        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" value="{{ old('title', $post->title) }}" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body">{{ old('body', $post->body) }}</textarea>
        </div>

        @foreach($tags as $tag)
            <div class="form-check">
                <input type="checkbox" name="tags[]" 
                       id="tag-{{ $loop->iteration }}" 
                       value="{{ $tag->id }}" 
                       @if($post->tags->contains($tag->id)) checked @endif >
                <label for="tag-{{ $loop->iteration }}">{{ $tag->name }}</label>
            </div>
        @endforeach

        <input class="btn btn-success mt-4" type="submit" value="Edit post">
        <a class="btn btn-warning mt-4" role="button" href="{{ route('posts.show', $post->id) }}">Back to post</a>
        <a class="btn btn-secondary mt-4" role="button" href="{{ route('posts.index') }}">Back to blog archive</a>
    </form>
    
@endsection
