@extends('layouts.auth')

@section('content')
<div class="page-content page-auth">
    <div class="section-store-auth" data-aos="fade-up">
    <div class="container">
        <div class="row align-items-center row-login">
        <div class="col-lg-6 text-center">
            <img
            src="/images/login-placeholder.png"
            alt=""
            class="w-50 mb-4 mb-lg-none"
            />
        </div>
        <div class="col-lg-5">
            <h2>
            Belanja kebutuhan utama, <br />
            menjadi lebih mudah
            </h2>
            <form action="" class="mt-3">
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control w-75" />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control w-75" />
            </div>
            <a
                href="/dashboard.html"
                class="btn btn-success btn-block w-75 mt-4"
            >
                Sign In to My Account
            </a>
            <a
                href="/register.html"
                class="btn btn-signup btn-block w-75 mt-2"
            >
                Sign Up
            </a>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="container" style="display: none">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
