@extends('base')

@section('block-body')
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-8 card p-3">
            <h3 class="card-title">{{ __('SIGNUP') }}</h3>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label class="requiredField">
                        {{ __('Name') }}
                    </label>
                    <div class="input-container">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div id="div_id_username" class="form-group mt-2">
                    <label for="id_username" class="requiredField">
                        {{ __('Email') }}
                    </label>
                    <div class="input-container">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group mt-2">
                    <label class="requiredField">
                        {{ __('Confirm Password') }}
                    </label>
                    <div class="input-container">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <button class="btn btn-success mt-3">{{ __('Signup') }}</button>
                <div class="pt-3">
                    <small class="text-muted">
                        Already Have An Account? <a class="ml-2" href="{{ route('login') }}">Login</a>
                    </small>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
