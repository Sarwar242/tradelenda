@extends('layouts.app')

@section('content')

<!-- WRAPPER -->
<div id="wrapper">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    <a href="{{url('login')}}" class="back"><i class="fa fa-long-arrow-left pr-2"></i><span>Back</span></a>
    <div class="auth-wrapper">
        <div class="container-fluid" > 
            <div class="auth-box">
                <div class="container-fluid panel-auth">

                    <div class="img-con">
                        <img  src="https://res.cloudinary.com/trade-lenda/image/upload/v1624865053/icons/Vector_Smart_Object_s9v7ek.png" />
                    </div>
                
                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                        <div class="content">
                            <div class="img-con">
                                <img  src="https://res.cloudinary.com/trade-lenda/image/upload/v1624865141/icons/Lock_ga50m1.png" />
                            </div>
                            <h3 ><b>Forgot Password?</b></h3>
                            <p>Please enter your email address below to reset your password</p>
                                <form class="form-auth-small" method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">{{ __('Email') }}</label>
                                    <input id="email signin-email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                        <label class="">{{ __('Captcha') }}</label>
                                        {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
                                        @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                
                                <button type="submit" class="btn btn-primary btn-lg btn-block ">{{ __('Continue') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<!-- END WRAPPER -->


                   

                        
           
    
@endsection
