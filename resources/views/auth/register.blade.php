@extends('layouts.login')

@section('content')
<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-85 p-b-20">
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <span class="login100-form-title p-b-70">
                        Welcome
                    </span>
                    <span class="">
                        <img src="{{ asset('assets/img/garage20.png') }}" style="width: 330px; height: 190px;">
                    </span>

                    <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
                        <input id="name" type="text" class="input100{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        <span class="focus-input100" data-placeholder="Username"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
                        <input id="email" type="email" class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
                        <input id="password" type="password" class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
                         <input id="password-confirm" type="password" class="input100" name="password_confirmation" required>
                        <span class="focus-input100" data-placeholder="Confirm Password"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <ul class="login-more p-t-190">
                        <li>
                            <span class="txt1">
                                Don’t have an account?
                            </span>

                            <a href="{{ route('register') }}" class="txt2">
                                Sign up
                            </a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
@endsection
