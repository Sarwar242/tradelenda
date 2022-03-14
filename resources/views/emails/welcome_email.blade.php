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
                    <p style="font-weight:bold; font-size: larger;">Welcome to Trade Lenda</p><br/>
                    <div style="font-weight: bold;">Hello {{ucfirst($user->first_name)}} {{ucfirst($user->last_name)}},</div>
                    <div style="padding-bottom: 20px;">
                        My name is Adeshina, CEO and co-founder of Trade Lenda.<br/><br/>
                       We are delighted you are joining us as an esteemed customer at Trade Lenda and I would like to Thank you for signing up. 
                    </div>
                    <a href="{{url('/')}}" target="_blank" rel="noopener noreferrer"> <button class="btn btn-primary" style="background-color: #24348B; cursor:pointer;">Get Started</button></a>


                    <div style="padding: 20px 0px;">
                        <p>We started Trade Lenda with a goal in mind, to be a bridge between MSMEs and financing. This we are constantly building towards. We hope to do this for over 200 million MSMEs in emerging markets across the world.</p><br/>
                        <p>We have decided to hold dear the philosophy of putting our customers at the fore of every decision we make, as such please reach out to us via email at info@tradelenda.com should you have any inquiries or comments </p><br/>
                        <p>Thank you once again for joining us and we hope to see you grow.</p>
                    </div>
                    <div>
                        Adeshina Adewumi 
                        <p style="color: black;">CEO Trade Lenda</p>
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
            </div>

            <div class="col-lg-2 col-md-2 col-sm-12"></div>

        </div>
    </div>

</body>

</html>
