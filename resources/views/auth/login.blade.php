@extends('front_page.common.header')
@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="container py-10 mb-2">
        <div class="heading text-center pb-4 mb-4">
            <h2><span>Login</span> </h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-7 col-lg-5">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="email" type="text" class="mb-4 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="password" type="password" class="mb-4 
                            form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Enter Password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
            </div>
        </div>
    </div>
</form>
@endsection
