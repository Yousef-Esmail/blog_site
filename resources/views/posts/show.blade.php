@extends('layouts.app')
@section('title', $post->title)
@section('content')
    <div class="container mt-4">
        <h1>{{ $post->title }}</h1>
        <p class="mt-3">{{ $post->body }}</p>

        <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-3"> Back to All Posts</a>
    </div>
@endsection