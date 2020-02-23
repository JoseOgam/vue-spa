@extends('layouts.login')

@section('content')
    <div class="limiter">
        <div class="container-login100">
             <span class="login100-form-title p-b-40">
						OR
					</span>
            <div class="wrap-login100 p-t-90 p-b-30">


                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <span class="login100-form-title p-b-40">
						email
					</span>

                    <div>
                        <div class="btn-login-with bg1 m-b-10">
                            <input id="email" type="email" class="btn-login-with bg1 m-b-10 @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <span class="login100-form-title p-b-40">
						Password
					</span>

                    <div>

                        <div class="btn-login-with bg1 m-b-10">
                            <input id="password" type="password"
                                   class="btn-login-with bg1 m-b-10 @error('password') is-invalid @enderror" name="password" required
                                   autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="#">
                        <div class="login100-form-title p-b-40">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="col-md-12 offset-md-12">

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
