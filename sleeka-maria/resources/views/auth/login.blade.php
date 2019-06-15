@extends('layouts.main')

@section('content')
<div class="content-area">
        <div class="login-form container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin">
                        <div class="card-body">
                        <h5 class="card-title text-center">Sign In</h5>
                    <form method="POST" action="{{ route('login') }}" class="form-signin">
                        @csrf

                        <div class="form-label-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <label for="inputEmail">Email address</label>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         </div>
                         
                            

                            <div class="form-label-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <label for="inputEmail">Password</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    

                        
                            
                                <div class="custom-control custom-checkbox mb-3">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            
                        

                        <div class="form-group row mb-0">
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                        
                        <button type="submit" class="btn btn-lg btn-outline-inf btn-block text-uppercase">
                                {{ __('Login') }}
                            </button>
                            <hr class="my-4">

                            <div class="form-group row mb-0">
                                    @if (Route::has('register'))
                                            <a class="btn btn-link" href="{{ route('register') }}">
                                                {{ __('You don\'t have an account? sign up here') }}
                                            </a>
                                        @endif
                                </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
