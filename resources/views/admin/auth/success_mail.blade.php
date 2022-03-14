<!DOCTYPE html>
<html>
<head>
  <title>Email Sent!</title>
 <!-- Styles -->
 <link href="{{ asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
 <link href="{{ asset('css/site.css') }}" rel="stylesheet">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<!-- WRAPPER -->
<div class="img-con">
  <img src="https://res.cloudinary.com/trade-lenda/image/upload/v1625670285/icons/Group_11433_phlhmx.png" />
</div>
<div id="wrapper">
  <div class="auth-wrapper">
      <div class="container-fluid">
          <div class="auth-box">
              <div class="container-fluid panel-auth">
                  <div class="col-md-12 col-sm-12 col-xs-12 ">
                      <div class="content-add-admin">
                          <div class="img-con">
                              <img src="https://res.cloudinary.com/trade-lenda/image/upload/v1624865232/icons/Chat_tzpwlx.png" />
                          </div>
                          <h3 style="text-align: center"><b>Viola! Please check your mail</b></h3>
                          <h6 style="text-align: center"><b>We just sent you an email with a link to reset your password. Please 
                              click on the link to reset your password.</b></h6>




                          <a href="{{route('admin.login')}}"><button type="submit" class="btn btn-primary btn-lg btn-block" value="Submit">Back to Login</button></a>
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
