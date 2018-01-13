@extends('layouts.landing.landing-master')

@section('content')

    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <h3 class="title has-text-white">Password Reset</h3>
                {{--<p class="subtitle has-text-white">Please Sign Up to Join Our Community.</p>--}}
                <div class="box">
                    <form method="POST" action="{{ route('password.email') }}">
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
                        <button class="button is-block is-info is-large"  type="submit">Send Password Reset Link</button>
                    </form>
                </div>
                <p class="has-text-white">
                    <a href="../">Need Help?</a>
                </p>
            </div>
        </div>
    </div>

@endsection
