@extends('front_page.common.header')
@section('content')
<form method="POST" action="{{ route('password.email') }}">
@csrf
<div class="container py-10 mb-2">
        <div class="heading text-center pb-4 mb-4">
            <h2><span>{{ __('Reset Password') }}</span> </h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-7 col-lg-5">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="form-group row">
                            <div class="col-md-12">
                               <input id="email" type="email" class="mb-4 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email Address" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
