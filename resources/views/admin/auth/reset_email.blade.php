<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password?</title>
<!-- Styles -->
<link href="{{ asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('css/site.css') }}" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
          <div class="container">
            @if(Session::has('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">
                    x
                </button>
                <strong>
                  {!! session('success')!!}   @php Session::forget('success') @endphp
                </strong>
            </div>
        @endif
        @if(Session::has('failed'))

            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">
                    x
                </button>
                <strong>
                    {!! session('failed') !!}  @php Session::forget('failed') @endphp
                </strong>
            </div>
        @endif
          </div>

<!-- WRAPPER -->
<div id="wrapper">
  <div class="img-con">
      <img src="https://res.cloudinary.com/trade-lenda/image/upload/v1625670285/icons/Group_11433_phlhmx.png" />
  </div>
  <a href="{{route('admin.login')}}" class="back"><i class="fa fa-long-arrow-left pr-2"></i><span>Back</span></a>
  <div class="auth-wrapper">
      <div class="container-fluid">
          <div class="auth-box">
              <div class="container-fluid panel-auth">
                  <div class="col-md-12 col-sm-12 col-xs-12 ">
                      <div class="content-add-admin">
                          <div class="img-con">
                              <img src="https://res.cloudinary.com/trade-lenda/image/upload/v1624865141/icons/Lock_ga50m1.png" />
                          </div>
                          <h3 style="text-align: center">Forgot Password?</h3>
                          <h6 style="text-align: center">Please enter your email address below to reset your password</h6>
                          <form method="POST" class="form-auth-small" action="{{ route('admin.password.email') }}">
                            @csrf
                          
                              <div class="form-group">
                                  <label for="signin-email" class="">Email Address</label>
                                  <input type="email" name="email" id="signin-email" class="form-control" id="exampleFormControlInput1" placeholder="Ex : someone@tradelenda.com">
                              </div>
                              <div class="form-group">
                                <label for="captcha" class="">Captcha</label>
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                                @endif
                            </div>
                              <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
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

             {{--  <center>
              <div class="form-group form-writings">
                <a href="{{route('admin.login')}}">Go to Log In</a>
              </div>
            </center>
            </form> --}}
</body>
<!-- Scripts -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('js/jquery.min.js') }}" defer></script>
<script src="{{ asset('js/site.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/js/all.min.js"></script>
</html>
