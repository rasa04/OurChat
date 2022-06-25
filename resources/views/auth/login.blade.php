@extends('layouts.app')

@section('content')
    <div id="form-login">
        <div id="action">{{ __('Login') }}</div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email" class="label">{{ __('Email Address') }}</label>
            <div class="email">
                <input id="email" type="email" class="form_input @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div>
                <label for="password" class="label">{{ __('Password') }}</label>
                <div class="password">
                    <input id="password" type="password" class="form_input @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div id="remember">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div>
                <button type="submit" class="btn_enter">
                    {{ __('Login') }}
                </button>
            </div>
            @if (Route::has('password.request'))
                <a class="reset_password" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </form>
    </div>
@endsection
