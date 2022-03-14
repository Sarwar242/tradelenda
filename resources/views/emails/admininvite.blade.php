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
                        <p style="font-weight:bold; font-size: larger;">Admin Login Invitation</p>
                        <h3>Hello {{$user->name}}</h3>
                        <div style="padding-bottom: 20px;">
                           <p> You have been invited to TradeLenda.com's Admin Panel as an Admin.</p>
                        </div>
                        <h3>Your Temporary Password is: </h3>
                        <p style="font-weight: bolder; font-size: 30px">{{$pass}}</p>
                        <a href="{{url(route('admin.login'))}}" target="_blank" rel="noopener noreferrer">
                            <button class="btn btn-primary" style="background-color: #24348B; cursor: pointer;" >Login</button></a>
                        <h4>Please don't forget to change your password after login.</h4>
                        <div>
                            Trade Lenda Team
                        </div>
                        <br>
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
</body>

</html>
