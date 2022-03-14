@extends('layouts.app')

@section('content')

<style>
    .field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
</style>
<!-- WRAPPER -->
<div id="wrapper">
    <h6 class="go-back font-weight-bold text-primary">
        <a href="{{url('http://tradelenda.com')}}"><i class="fa fa-long-arrow-left pr-2"></i> Back</a>
    </h6>
        @if (session('alert'))
            <div class="alert alert-success">
                {{ session('alert') }}
            </div>
        @endif
    <div class="auth-wrapper auth-wrapper-2">
        <div class="container-fluid">
            <div class="auth-box">
                <div class="container-fluid panel-auth">

                    <div class="img-con">
                        <a href="{{url('http://tradelenda.com')}}"><img  src="https://res.cloudinary.com/trade-lenda/image/upload/v1628132872/landing_page_pic/Group_11434_2_umfio2.png" /></a>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 content">
                        <div class="panel-auth-con ">
                            <div class="head">
                                <p>Welcome back,</p>
                                <h2><b>Login to your account</b></h2>
                            </div>
                            <form class="form-auth-small" method="POST" action="{{ route('login') }}">
                                    @csrf
                                <div class="form-group">
                                    <label for="signin-email" class="">{{ __('Email') }}</label>
                                    <input id="email signin-email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <br />
                                    <div class="form-group">
                                        <label for="Captcha" class="">{{ __('Captcha') }}</label>
                                        {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
                                        @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                        @endif

                                        </div>
                                    <div>
                                    @if (Route::has('password.request'))
                                    <span class="helper-text"><i class="fa fa-lock"></i><a class="btn btn-link" style="padding-left:0;" href="{{route('password.request')}}">{{ __('Forgot password?') }}</a></span>
                                    @endif
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-lg btn-block"> {{ __('Sign In') }}</button>
                                <div class="bottom">
                                    <span class="helper-text"><b>Dont have an account?</b> <a href="{{url('register')}}">Register</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src="js/script.js"></script>

<!-- END WRAPPER -->
@endsection
