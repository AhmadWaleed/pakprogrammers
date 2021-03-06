@extends('layouts.landing.landing-master')

@section('content')

    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <h3 class="title has-text-white">Sign Up</h3>
                <p class="subtitle has-text-white">Please Sign Up to Join Our Community.</p>
                <div class="box">
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="field">
                            <div class="control">
                                <input class="input is-large" type="name" name="name" placeholder="Your Name" autofocus="" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>

                                @endif
                            </div>
                        </div>

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
                            <div class="control">
                                <input id="password-confirm" type="password" class="input is-large" name="password_confirmation" placeholder="Confirm Your Password" required>
                            </div>
                        </div>
                        <button class="button is-block is-info is-large"  type="submit">Register</button>
                    </form>
                </div>
                <p class="has-text-white">
                    {{--<a href="{{ route('register') }}">Sign Up</a> &nbsp;·&nbsp;--}}
                    <a href="../">Need Help?</a>
                </p>
            </div>
        </div>
    </div>
@endsection
