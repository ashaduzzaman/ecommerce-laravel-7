@extends('layouts.front')

@section('content')
<div class="container">
    <section id="signin" class="signin signin-section">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="signin-title col-md-6 col-12">
                        <h3>Welcome to Motor Sheba! Please signin.</h3>
                    </div>
                    <div class="signin-other col-md-6 col-12">
                        <span class="float-right">New member?
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Signup</a>
                            @endif
                            here.
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="form-main">
                    <div class="row">
                        <div class="col-md-8">
                            <form class="form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email">{{ __('E-Mail Address') }}</label>
                                        <input id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{-- <div class="col-md-6"> --}}
                                    {{-- </div> --}}
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{-- <div class="col-md-6">
                                    </div> --}}
                                </div>

                                {{-- <div class="row"> --}}
                                        <div class="col-12">
                                            <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                {{-- </div> --}}
                                <div class="col-12">
                                    <div class="row mt-35">
                                        <div class="col-md-6 col-12">
                                            <button type="submit" class="btn">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="forgot-pass-link">
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <div class="signin-third-party">
                                <div class="col-12">
                                    <div class="third-party-signin-line">
                                        <span>Or, signin with</span>
                                    </div>
                                    <div class="third-party-signin-bd">
                                        <button class="third-party-signin-btn third-party-signin-fb" type="button" data-spm-anchor-id="a2a0e.login_signup.0.i1.47f92829bxb8fQ">
                                            <i class="ti-facebook"></i>
                                            Facebook
                                        </button>
                                    </div>
                                    <div class="third-party-signin-bd">
                                        <button class="third-party-signin-btn third-party-signin-google" type="button" data-spm-anchor-id="a2a0e.login_signup.0.i1.47f92829bxb8fQ">
                                            <i class="ti-google"></i>
                                            Google
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
