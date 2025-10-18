@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card shadow-lg border-0" style="width: 400px; border-radius: 16px;">
            <div class="card-body p-4">
                <h3 class="text-center mb-4 fw-bold text-dark">Welcome Back</h3>

                <form method="POST" action="{{ route('login') }}" autocomplete="off" novalidate>
                    @csrf
                    <input type="text" name="prevent_autofill_username" id="prevent_autofill_username"
                        style="position: absolute; left: -9999px; top: -9999px;" autocomplete="off">
                    <input type="password" name="prevent_autofill_password" id="prevent_autofill_password"
                        style="position: absolute; left: -9999px; top: -9999px;" autocomplete="off">
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

                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>

                <p class="text-center mt-3 mb-0">
                    Don't have an account?
                    <a href="/register" class="text-decoration-none fw-semibold">Register here</a>
                </p>
            </div>
        </div>
    </div>
@endsection