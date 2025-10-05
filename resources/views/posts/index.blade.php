@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">All Blog Posts</h1>

        @foreach($posts as $post)
            <div class="card mb-3">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h3>
                            <a href="{{ route('posts.show', $post->id) }}">
                                {{ $post->title }}
                            </a>
                        </h3>
                        <p>{{ Str::limit($post->body, 100, '...') }}</p>
                    </div>

                    <div class="d-flex gap-2">
                        {{-- زرار Edit --}}
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        {{-- زرار Delete --}}
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this post?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection