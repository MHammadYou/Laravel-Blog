@extends('base')

@section('block-body')
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-8 card p-3">
            <h3 class="card-title">{{ __('LOGIN') }}</h3>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label class="requiredField">
                        {{ __('Email') }}
                    </label>
                    <div class="input-container">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group mt-2">
                    <label class="requiredField">
                        {{ __('Password') }}
                    </label>
                    <div class="input-container">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group mt-2">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="requiredField">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <button class="btn btn-success mt-3">{{ __('LOGIN') }}</button>
                <div class="pt-3">
                    <small class="text-muted">
                        {{ __('Need an account?') }} <a class="ml-2" href="{{ route('register') }}">{{ __('Signup') }}</a>
                    </small>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
