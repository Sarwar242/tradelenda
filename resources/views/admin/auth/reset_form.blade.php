<!DOCTYPE html>
<html>
<head>
  <title>Reset Password</title>
  <!-- Styles -->
  <link href="{{ asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('css/site.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

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
                            <h3 style="text-align: center"><b>Create new Password</b></h3>
                            <form id="loginform" class="form-container" method="post" action="{{ route('admin.password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="container">
                                    @if(Session::has('failedx'))
                                        <div class="alert alert-error alert-block">
                                            <button type="button" class="close" data-dismiss="alert">
                                                x
                                            </button>
                                            <strong>
                                                {!! session('failedx') !!} @php Session::forget('failedx') @endphp
                                            </strong>
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="signin-email" class="">Email Address</label>
                                    <input type="email" name="email" id="signin-email" placeholder="someone@gmail.com" value="{{ $email ?? old('email') }}" class="form-control @error('email') is-invalid @enderror" required autocomplete="email" autofocus />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="">New Password</label>
                                    <input type="password" name="password" id="signin-password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="">Confirm new Password</label>
                                    <input type="password" class="form-control" id="signin-password" name="password_confirmation" placeholder="Confirm Password" />
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" value="Submit">Reset Password</button>
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
</body>
	<!-- Scripts -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/site.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/js/all.min.js"></script>
</html>
