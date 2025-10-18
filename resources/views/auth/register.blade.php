@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card shadow-lg border-0" style="width: 400px; border-radius: 16px;">
            <div class="card-body p-4">
                <h3 class="text-center mb-4 fw-bold text-dark">Create Account</h3>

                <form method="POST" action="/register">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter your password" required>
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label fw-semibold">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                            placeholder="Confirm your password" required>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Register</button>
                </form>

                <p class="text-center mt-3 mb-0">
                    Already have an account?
                    <a href="/login" class="text-decoration-none fw-semibold">Login here</a>
                </p>
            </div>
        </div>
    </div>
@endsection