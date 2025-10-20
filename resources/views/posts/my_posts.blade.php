@extends('layouts.app')

@section('title', 'My Posts')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 text-center fw-bold">My Posts</h1>

        @if($posts->count() > 0)
            @foreach($posts as $post)
                <div class="card mb-4 shadow-sm border-0">
                    <div class="card-body">
                        <h3 class="card-title fw-bold">
                            <a href="{{ route('posts.show', $post->id) }}" class="text-decoration-none text-dark">
                                {{ $post->title }}
                            </a>
                        </h3>

                        <p class="text-muted mb-2">
                            By <strong>{{ $post->user->name }}</strong> |
                            {{ $post->created_at->format('M j, Y') }}
                        </p>

                        <p class="card-text">{{ Str::limit($post->body, 100, '...') }}</p>

                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">
                                    Read More
                                </a>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">
                                    Edit
                                </a>
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
                </div>
            @endforeach
        @else
            <p class="text-center text-muted">You have no posts yet.</p>
        @endif
    </div>
@endsection