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

                    <div>
                        <p style="font-weight:bold; font-size: larger;">Email Verification</p>
                        <div style="font-weight: bold;">Hello {{ucfirst($user->first_name)}} {{ucfirst($user->last_name)}},</div>
                        <div style="padding-bottom: 20px;">
                            Below is your code to verify your account on Trade Lenda.
                        </div>
                        <p style="font-weight: bolder; font-size: 30px">{{$otp}}</p>

                        <div>
                            Trade Lenda Team
                        </div>
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
                        <p><a style="color: white;" href="#">Platform</a></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-12"></div>

            </div>



        </div>
        <script src="{{ asset('js/jquery.min.js')}}"></script>
</body>

</html>
