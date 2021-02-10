@extends('layouts.front')

@section('content')
<div class="container">
    <section id="signin" class="signin signin-section">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="signin-title col-md-6 col-12">
                        <h3>Create your Motor Sheba Account</h3>
                    </div>
                    <div class="signin-other col-md-6 col-12">
                        <span class="float-right">Already member?
                                <a href="{{ route('login') }}">Signin</a>
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
                            <form class="form" method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="name">{{ __('Name') }}</label>
                                        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email">{{ __('E-Mail Address') }}</label>

                                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row mt-35">
                                        <div class="col-md-6 col-12">
                                            <button type="submit" class="btn">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <div class="signin-third-party">
                                <div class="col-12">
                                    <div class="third-party-signin-line">
                                        <span>Or, signup with</span>
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
