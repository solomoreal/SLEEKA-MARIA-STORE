@extends('layouts.main')

@section('content')
<div class="">
        <div class="login-form">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                        <div class="card card-signin">
                            <div class="card-body">
                                <h5 class="card-title text-center">Sign Up</h5>
                        <form method="POST" action="{{ route('register') }}" class="form-signin">
                        @csrf

                        <div class="form-label-group ">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <label for="inputEmail">Name</label>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                       
                            <div class="form-label-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <label for="inputEmail">Email address</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-label-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <label for="inputEmail">Password</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-label-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <label for="inputEmail">Comfirm Password</label>
                            </div>
                                <button type="submit" class="btn btn-lg btn-outline-inf btn-block text-uppercase">
                                    {{ __('Register') }}
                                </button>
                                <hr class="my-4">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection
