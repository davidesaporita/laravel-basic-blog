@extends('layouts.main')

@section('content')
    
    <h1 class="mb-4">Add a new post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @method('post')

        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" value="{{ old('title') }}" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body">{{ old('body') }}</textarea>
        </div>

        @foreach($tags as $tag)
            <div class="form-check">
                <input type="checkbox" name="tags[]" id="tag-{{ $loop->iteration }}" value="{{ $tag->id }}">
                <label for="tag-{{ $loop->iteration }}">{{ $tag->name }}</label>
            </div>
        @endforeach

        <input class="btn btn-success mt-4" type="submit" value="Create post">
        <a class="btn btn-secondary mt-4" role="button" href="{{ route('posts.index') }}">Back to blog archive</a>
    </form>
    
@endsection
