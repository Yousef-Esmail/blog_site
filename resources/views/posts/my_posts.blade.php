@extends('layouts.app')

@section('title', 'My Posts')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">My Posts</h1>

        @if($posts->count() > 0)
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
            @endforeach
        @else
            <p>You have no posts yet.</p>
        @endif
    </div>
@endsection