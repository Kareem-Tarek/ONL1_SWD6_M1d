@extends('layouts.app')

@section('content')

<style>
body {
    background: linear-gradient(135deg, #f0f2f5 0%, #e8eaf6 100%);
    font-family: 'Roboto', sans-serif;
}

.container {
    margin-top: 100px;
}

.card {
    border: none;
    border-radius: 20px;
    background: #ffffff;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

.card-header {
    background-color: #ff5722;
    color: white;
    text-align: center;
    font-size: 2rem;
    font-weight: 600;
    border-bottom: none;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    padding: 20px;
}

.card-body {
    padding: 3rem;
}

.btn-primary {
    background-color: #ff5722;
    border: none;
    padding: 12px 24px;
    font-size: 1.2rem;
    border-radius: 50px;
    transition: background-color 0.3s, box-shadow 0.3s;
}

.btn-primary:hover {
    background-color: #e64a19;
    box-shadow: 0 5px 15px rgba(255, 87, 34, 0.4);
}

.form-control {
    border-radius: 10px;
    border: 1px solid #ddd;
    transition: border-color 0.3s;
    padding: 12px;
}

.form-control:focus {
    border-color: #ff5722;
    box-shadow: 0 0 5px rgba(255, 87, 34, 0.5);
}

.invalid-feedback {
    color: #e64a19;
    font-size: 0.9rem;
}

.btn-link {
    color: #ff5722;
    font-weight: bold;
    text-decoration: underline;
}

.btn-link:hover {
    color: #e64a19;
}

.form-check-label {
    font-size: 0.9rem;
    color: #343a40;
}

/* Responsive Enhancements */
@media (max-width: 768px) {
    .card-body {
        padding: 2rem;
    }

    .btn-primary {
        width: 100%;
        margin-top: 10px;
    }
}
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="col-form-label">{{ __('Email Address') }}</label>
                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="col-form-label">{{ __('Password') }}</label>
                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
