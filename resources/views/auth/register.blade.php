@extends('layouts.app')

@section('content')

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css'>


<style>
    .field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}



.multi_step_form {
    background: #f6f9fb;
    display: block;
    overflow: hidden;
}

.intl-tel-input{
    display: block;
}

.multi_step_form #msform {
    text-align: center;
    position: relative;
    padding-top: 50px;
    min-height: 820px;
    max-width: 810px;
    margin: 0 auto;
    background: #ffffff;
    z-index: 1;
}








</style>

<!-- WRAPPER -->
<div id="wrapper">
    <h6 class="go-back font-weight-bold text-primary">
        <a href="{{url('https://tradelenda.com')}}"><i class="fa fa-long-arrow-left pr-2"></i> Back</a>
    </h6>
    <div class="auth-wrapper auth-wrapper-2">
        <div class="container-fluid">
                <div class="auth-box">
                    <div class="container-fluid panel-auth">

                        <div class="img-con">
                            <a href="{{url('https://tradelenda.com')}}"><img  src="https://res.cloudinary.com/trade-lenda/image/upload/v1628132872/landing_page_pic/Group_11434_2_umfio2.png" /></a>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 content">
                            <div class="panel-auth-con">
                                <div class="">
                                    <p>Welcome To Trade Lenda,</p>
                                    <h2><b>Register an Account</b></h2>
                                </div>
                                <form id="msform" class="form-auth-small" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="col-md-12 row">
                                        <div class="form-group col-md-6 col-sm-6 col-xs-6" style="padding:0px" >
                                            <label class="">{{ __('First Name') }}</label>
                                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                            @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-6" style="padding: 0px;">
                                            <label   class="">{{ __('Last Name') }}</label>
                                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12" style="padding:0px">
                                            <label for="email" class="">{{ __('Email Address') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12" style="padding:0px">
                                            <label   class="">{{ __('Phone Number') }}</label>
                                            <input id="phone_no" type="tel" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" required autocomplete="phone_no" placeholder="+234">

                                            @error('phone_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12" style="padding:0px">
                                            <label class="">{{ __('Password') }}</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password">
                                            <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ 'Your password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.' }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 row">
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12" style="padding:0px">
                                            <label class="">{{ __('Captcha') }}</label>
                                            {!! NoCaptcha::renderJs() !!}
                                            {!! NoCaptcha::display() !!}
                                            @if ($errors->has('g-recaptcha-response'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Create Account') }}</button>
                                    <div class="bottom">
                                        <span class="helper-text"><b>Already have an account?</b> <a href="{{url('login')}}">Login</a></span>
                                    </div>

        {{-- <div class="container">
       <div class="row">
         <div class="col-md-12 row-block">
          <a href="{{ url('redirect') }}" class="btn btn-lg btn-primary btn-block">
          <strong>Login With Google</strong>
          </a>
         </div>
       </div>
    </div> --}}
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="clearfix"></div>
                </div>
            <div class="col-md-2 col-xs-12"></div>
        </div>
    </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js'></script>
<script src="js/script.js"></script>

<!-- END WRAPPER -->


                        {{-- <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
 --}}



@endsection
