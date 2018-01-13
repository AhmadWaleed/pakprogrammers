@extends('layouts.landing.landing-master')

@section('content')

    <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-white">Login</h3>
                    <p class="subtitle has-text-white">Please login to proceed.</p>
                    <div class="box">
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="email" name="email" placeholder="Your Email" autofocus="" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>

                                     @endif
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="password" name="password" placeholder="Your Password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif

                                </div>
                            </div>
                            <div class="field">
                                <label class="checkbox">
                                    <input type="checkbox" name="remember">
                                    Remember me
                                </label>
                            </div>
                            <button class="button is-block is-info is-large" type="submit">Login</button>
                        </form>
                    </div>
                    <p class="has-text-white">
                        <a href="{{ route('register') }}">Sign Up</a> &nbsp;·&nbsp;
                        <a href="{{ route('password.request') }}">Forgot Password</a> &nbsp;·&nbsp;
                        <a href="../">Need Help?</a>
                    </p>
                </div>
            </div>
        </div>

@endsection
