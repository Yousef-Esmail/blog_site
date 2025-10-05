@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Title:</label>
        <input type="text" name="title" value="{{ $post->title }}" class="form-control">

        <label>Body:</label>
        <textarea name="body" class="form-control">{{ $post->body }}</textarea>

        <button type="submit" class="btn btn-success mt-2">Update</button>
    </form>
@endsection