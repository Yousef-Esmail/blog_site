@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">All Blog Posts</h1>

        @foreach($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h3>
                        <a href="{{ route('posts.show', $post->id) }}">
                            {{ $post->title }}
                        </a>
                    </h3>

                    <p class="text-muted mb-2 small">
                        By
                        @if($post->user)
                            {{ $post->user->name }}
                        @else
                            Anonymous
                        @endif
                        · {{ $post->created_at->diffForHumans() }}
                    </p>

                    <p>{{ Str::limit($post->body, 100, '...') }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection