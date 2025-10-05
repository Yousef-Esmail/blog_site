@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <h1 class="text-center mb-5">Latest Blog Posts</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">Post Title 1</h3>
                    <p class="text-muted">By Admin | Sep 9, 2025</p>
                    <p class="card-text">This is a short summary of the first post...</p>
                    <a href="#" class="btn btn-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-8 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title">Post Title 2</h3>
                    <p class="text-muted">By Guest | Sep 8, 2025</p>
                    <p class="card-text">Another post summary goes here...</p>
                    <a href="#" class="btn btn-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>
    </div>
@endsection