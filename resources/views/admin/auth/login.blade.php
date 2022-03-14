
<!DOCTYPE html>
<html>
<head>
	<title>Log In as Admin</title>
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
	<a href="{{url('/')}}" class="back"><i class="fa fa-long-arrow-left pr-2"></i><span>Back</span></a>
	<div class="auth-wrapper">
		<div class="container-fluid">
			<div class="auth-box">
				<div class="container-fluid panel-auth">
					<div class="col-md-12 col-sm-12 col-xs-12 ">
						<div class="content-add-admin">
							<div class="img-con">
								<img src="https://res.cloudinary.com/trade-lenda/image/upload/v1624865141/icons/Lock_ga50m1.png"" />
							</div>
							<h3 style="text-align: center"><b>Login to your account</b></h3>
							<form class="form-auth-small" method="POST" action="{{ route('admin.login.submit') }}">
								@csrf
								<div class="text-center">              
									@if(Session::has('successx'))
										<div class="alert alert-danger alert-block">
											<button type="button" class="close" data-dismiss="alert">
												x
											</button>
											<strong>
											{!! session('successx')!!}   @php Session::forget('successx') @endphp
											</strong>
										</div>
									@endif
								</div>
								<div class="form-group">
									<label for="signin-email" class="">Email</label>
									<input type="email" name="email" id="signin-email" class="form-control @error('email') is-invalid @enderror"
									value="{{ old('email') }}" required autocomplete="email" autofocus>
									@error('email')
									<div class="alert alert-danger alert-block">
										<button type="button" class="close" data-dismiss="alert">
											x
										</button>
										<strong>
											{!! $message !!}
										</strong>
									</div>
								@enderror
								</div>
								<div class="form-group">
									<label for="signin-password" class="">Password</label>
									<input type="password"  name="password" id="signin-password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
						            @error('password')
									<div class="alert alert-danger alert-block">
										<button type="button" class="close" data-dismiss="alert">
											x
										</button>
										<strong>
											{!! $message !!}
										</strong>
									</div>
								@enderror
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
									<br />
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="{{route('admin.password.request')}}">Forgot password?</a></span>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">Continue</button>
							</form>
						</div>
					</div>
				</div>

				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
</body>
<!-- END WRAPPER -->
	<!-- Scripts -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/site.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/js/all.min.js"></script>
</html>
