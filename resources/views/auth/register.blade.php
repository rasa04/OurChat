@extends('layouts.app')

@section('content')
    <div id="form-login">
        <div id="action">{{ __('Register') }}</div>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name" class="label">{{ __('Name') }}</label>
            <div>
                <input id="name" type="text" class="form_input @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div>
                <label for="email" class="label">{{ __('Email Address') }}</label>

                <div>
                    <input id="email" type="email" class="form_input @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="password" class="label">{{ __('Password') }}</label>
                <div>
                    <input id="password" type="password" class="form_input @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">
                    @error('password')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>

                <div>
                    <input id="password-confirm" type="password" class="form_input" name="password_confirmation" required
                        autocomplete="new-password">
                </div>
            </div>

            <div>
                <button type="submit" class="btn_enter">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
@endsection
