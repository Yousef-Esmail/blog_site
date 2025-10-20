@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
    <div class="py-5" style="background-color: #f5f6f7; min-height: 100vh;">
        <div class="container">
            <h1 class="text-center mb-5 fw-bold">Latest Blog Posts</h1>

            @forelse($posts as $post)
                <div class="card mb-4 shadow-sm border-0 rounded-3">
                    <div class="card-body">
                        <h3 class="card-title fw-bold mb-2">{{ $post->title }}</h3>
                        <p class="text-muted mb-3">
                            By <strong>{{ $post->user->name ?? 'Guest' }}</strong> |
                            {{ $post->created_at->format('M j, Y') }}
                        </p>
                        <p class="card-text text-secondary">{{ Str::limit($post->body, 150, '...') }}</p>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary mt-2">Read More</a>
                    </div>
                </div>
            @empty
                <div class="text-center mt-5">
                    <h4 class="text-muted">No posts available yet.</h4>
                </div>
            @endforelse
        </div>
    </div>
@endsection