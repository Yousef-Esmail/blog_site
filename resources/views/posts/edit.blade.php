@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <div class="container mt-4">
        <h1>Edit Post</h1>
        {{-- Display validation errors --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- form --}}
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Post Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $post->title) }}"
                    placeholder="Enter title" required>
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Post Body</label>
                <textarea name="body" class="form-control" rows="5" placeholder="Write your post here..."
                    required>{{ old('body', $post->body) }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Update Post</button>
        </form>
    </div>
@endsection