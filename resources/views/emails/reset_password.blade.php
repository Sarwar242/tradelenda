<html>

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link type="text/css" href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row">

            <div class="col-lg-2 col-md-2 col-sm-12"></div>

            <div class="col-lg-8 col-md-8 col-sm-12">
                <div>

                    <img src="{{asset('img/logo.png')}}">
                    <hr style="background-color: aliceblue;" />
                </div>

                <div>
                    <p style="font-weight:bold; font-size: larger;">Reset your Password</p>
                    <div style="font-weight: bold;">Hello {{$name}},</div>
                    <div style="padding-bottom: 20px;">
                        Reset your password on your Trader Lenda account. Please click on the link below to reset your password or ignore if you didn't make this request.
                    </div>
                    <a href="{{url(route('password.reset', ['token' => $token, 'email' => $email], false))}}" target="_blank" rel="noopener noreferrer"><button class="btn btn-primary" style="background-color: #24348B; cursor: pointer;" >Reset Password</button></a>

                    <div style="color:rgb(222, 230, 236); padding: 20px 0px;">
                        or you can copy and past the URL below into your web broswer
                        <a href="{{url(route('password.reset', ['token' => $token, 'email' => $email], false))}}" target="_blank" rel="noopener noreferrer">{{url(route('password.reset', ['token' => $token, 'email' => $email], false))}}</a>
                    </div>
                    <div style="color:rgb(222, 230, 236);">
                        Welcome to Trade Lenda!
                        <p style="color: black;">Trade Lenda Team</p>
                    </div>

                    <div style="background-color: #24348B; color: white; padding: 20px;">
                        <div style="text-align: center;">
                            <a style="color: white;" href="https://facebook.com/tradelenda"><i class="fa fa-facebook" style="margin:5px 20px;"></i></a>
                            <a style="color: white;" href="https://twitter.com/tradelenda"><i class="fa fa-twitter" style="margin:5px 20px;"></i></a>
                            <a style="color: white;" href="https://instragram.com/tradelenda"><i class="fa fa-instagram" style="margin:5px 20px;"></i></a>
                            <a style="color: white;" href="https://linkedin.com/company/tradelenda"><i class="fa fa-linkedin" style="margin:5px 20px;"></i></a>
                        </div>
                        <hr/>
                        <p><a style="color: white;" href="#">Contact Support</a></p>
                        <p><a style="color: white;" href="#">Privacy</a></p>
                        <p><a style="color: white;" href="">Platform</a></p>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-12"></div>

                </div>
            </div>


</body>
<script src="{{ asset('js/jquery.min.js')}}"></script>
</body>

</html>
