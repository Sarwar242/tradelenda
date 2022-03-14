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
                        <p style="font-weight:bold; font-size: larger;">Loan Approval Notification</p>
                        <h3>Hello {{ucfirst($user->first_name)}} {{ucfirst($user->last_name)}},</h3>
                        <div style="padding-bottom: 2px;">
                           <p style="color:black; font-size:16px;">Your Requested loan for <strong>{{$loan->reason}}</strong> has been approved by Trade Lenda Admins.</p>
                        </div>
                        <h2>Your Loan Amount: <strong style="font-size:20px;">₦{{number_format($loan->amount)}}</strong></h2>

                        <a href="{{url('/notification')}}" target="_blank" rel="noopener noreferrer">
                            <button class="btn btn-primary" style="background-color: #24348B; cursor: pointer;" >Check Notifications</button></a>

                        <div>
                            <h4 style="color: black;">Trade Lenda Team</h4>
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
