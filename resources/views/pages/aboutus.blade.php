<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Oct 28 2021 17:34:17 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5fd16ddf84f96063cb73502e" data-wf-site="5fb7a41f1de43196d23310bb">
<!-- Copied from https://ng.getcarbon.co/about.html by Cyotek WebCopy 1.6.0.559, Saturday, October 30, 2021, 3:31:34 AM -->

<head>
    <meta charset="utf-8">
    <title>About Trade Lenda - One-Stop finance plug for Retailers</title>
    <meta content="We believe that every business has a higher potential to grow bigger when provided financial support. And we are on a mission to help SMEs accross emerging markets access financing for business growth." name="description">
    <meta content="About Trade Lenda - One-Stop finance plug for Retailers" property="og:title">
    <meta content="We believe that every business has a higher potential to grow bigger when provided financial support. And we are on a mission to help SMEs accross emerging markets access financing for business growth." property="og:description">
    <meta content=" " property="og:image">
    <meta content="About Trade Lenda - One-Stop finance plug for Retailers" property="twitter:title">
    <meta content="We believe that every business has a higher potential to grow bigger when provided financial support. And we are on a mission to help SMEs accross emerging markets access financing for business growth." property="twitter:description">
    <meta content=" " property="twitter:image">
    <meta property="og:type" content="website">
    <meta content="summary_large_image" name="twitter:card">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/webflow.css" rel="stylesheet" type="text/css">
    <link href="css/cwebsite.webflow.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <style>
        .members_name{text-align: right; font-size: 14px;}
        .in_spacing{padding: 5px;}
        .in_div{margin-top: 12px;}
        @media (max-width: 768px){
            .members_image_div{margin-bottom: 10px;}
            
        }
        @media (min-width: 768px) and (max-width: 992px){
            .in_spacing{padding: 2px;}
            .members_name{text-align: left;}
            .leadership {width: 100%;}
            
        }
        @media (min-width: 768px) and (max-width: 991px){
            .members_name{ font-size: 10px;}
            .in_div{margin-top: 5px;}
        }
    </style>
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    <link href="https://res.cloudinary.com/trade-lenda/image/upload/v1634729358/landing_page_pic/favicon_e4ra6g.png" rel="shortcut icon" type="image/x-icon">
    <link href="https://res.cloudinary.com/trade-lenda/image/upload/v1634729358/landing_page_pic/favicon_e4ra6g.png" rel="apple-touch-icon">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D5YLY3RN6Y"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-D5YLY3RN6Y');
    </script>
</head>

<body>
    <div>
        <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navigation w-nav">
            <div class="nav-background">
                <div class="navigation-container">
                    <div class="navigation-left">
                        <div class="div-block-38">
                            <a href="#" aria-current="page" class="brand-2 w-nav-brand w--current"><img src="https://res.cloudinary.com/trade-lenda/image/upload/v1628132872/landing_page_pic/Group_11434_2_umfio2.png" width="200" alt="" class="carbon-main-logo"></a>
                            <!-- <div class="plans">
                        <a href="#" aria-current="page" class="nav-link-3 w-nav-link w--current">Personal</a>
                        <a href="#" target="_blank" class="business-link w-nav-link">Business</a>
                    </div> -->
                        </div>
                    </div>
                    <div class="navigation-right">
                        @if (Route::has('login'))
                        <nav role="navigation" class="nav-menu-2 w-nav-menu">
                            <div data-hover="true" data-delay="0" class="dropdown-3 w-dropdown">
                                <div class="dropdown-toggle---features w-dropdown-toggle">
                                    <a href="{{url('/')}}" style="text-decoration: none;">
                                        <div class="text-block-13">Home</div>
                                    </a>
                                </div>

                            </div>
                            <div data-hover="true" data-delay="0" class="dropdown-3 w-dropdown">
                                <div class="dropdown-toggle-company w-dropdown-toggle">
                                    <a href="{{url('#leader')}}" style="text-decoration: none;">
                                        <div class="text-block-13">Our Team</div>
                                    </a>
                                </div>
                            </div>

                        </nav>
                        <div class="login-buttons">
                            @auth @else
                            <a href="{{ route('login') }}" style="text-decoration: none;" class="sign-in w-button">Sign in</a> &nbsp;&nbsp;
                            <!-- <a href="#" style="text-decoration: none;" class="sign-in w-button">Register</a>&nbsp;&nbsp; -->
                            @endauth @endif
                            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                            <a href="{{url('invest')}}" style="text-decoration: none;" class="invest w-button"><span class="spinner-grow spinner-grow-sm" role="status " aria-hidden="true"></span>&nbsp;&nbsp;Invest with us</a>


                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease-out" data-easing2="ease-out" role="banner" class="navigation-mob w-nav">
            <div class="navigation-container-mob">
                <a href="#" class="logo-wrapper w-nav-brand"><img src="https://res.cloudinary.com/trade-lenda/image/upload/v1628132872/landing_page_pic/Group_11434_2_umfio2.png" alt="" class="carbon-main-logo"></a>
                <nav role="navigation" class="mobile-nav w-nav-menu">
                    <a href="{{url('/')}}" class="mobile-nav-link w-nav-link">Home</a>
                    <a href="{{url('/#leader')}}" class="mobile-nav-link w-nav-link">Our Team</a>
                    <a href="{{ route('login') }}" class="mobile-nav-link w-nav-link">Sign in</a>
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                    <a href="{{url('invest')}}" style="text-decoration: none;" class="invest w-button"><span class="spinner-grow spinner-grow-sm" role="status " aria-hidden="true"></span>&nbsp;&nbsp;Invest with us</a>

                </nav>
                <div class="menu-mob w-nav-button">
                    <div class="w-icon-nav-menu"></div>
                </div>
            </div>
        </div>

        <div class="hero-section next-billion wf-section">
            <div class="about-hero-container providing-access">
                <div data-w-id="6c17bf31-1dd9-801a-831c-3a5f75269a0b" style="-webkit-transform:translate3d(0, 55px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 55px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 55px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 55px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                    class="about-flex financial-access-hero">
                    <div class="carbon-about-title-wrapper">
                        <h1 class="heading about-header-title">Providing accessible financing to small businesses across Africa</h1>
                    </div>
                    <div data-w-id="6c17bf31-1dd9-801a-831c-3a5f75269a13" style="-webkit-transform:translate3d(0, 55px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 55px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 55px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 55px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                        class="about-video">

                    </div>
                    <div data-w-id="d6db53f4-f6dc-147e-846f-d44336979d2a" style="-webkit-transform:translate3d(0, 55px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 55px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 55px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 55px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                        class="our-mission content-1">
                        <h1 class="heading mission-header">Our Mission</h1>
                        <p class="paragraph-9">We believe that every business has a higher potential to grow bigger when provided financial support. And we are on a mission to help SMEs accross emerging markets access financing for business growth.</p>
                    </div>
                    <div data-w-id="6c17bf31-1dd9-801a-831c-3a5f75269a18" style="-webkit-transform:translate3d(0, 55px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 55px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 55px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 55px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                        class="who-we-are content-2">
                        <h1 class="heading mission-header">Who we are</h1>
                        <p class="paragraph-9 who-we-are-copy">We are a financial service company that assists Micro, Small and informal retailers with access to financing for business needs. We also assist retailers with access to distributors and manufacturers. We currently operate out of
                            Lagos, Nigeria.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-section staff-pictures about wf-section">
            <div class="large-single-img">
                <div class="photo-wrapper-box about"></div>
            </div>
        </div>


        <!--BEGIN-->
       <div style="margin-bottom: 45px" id="leader">
        <div class="leadership">
            <h1 class="heading leadership-header">Our Team</h1>
            <p style="font-size: 19px; font-weight: bold; text-align: center;">Board Members</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12"></div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 members_image_div" style="margin-right:10px; border: solid 5px #2e6da4; border-radius: 20px; height: 100%;">
                    <img src="https://res.cloudinary.com/trade-lenda/image/upload/v1635776233/landing_page_pic/2_uqf12w.jpg" alt="Adeshina_img.jpeg" style="display:block; width: 100%; height: 100%;">
                    <div>
                      <div style="width:70%; padding-right:5px; border-right: 2px #2e6da4 solid; display: inline; float: left; margin-bottom: 4px;">
                        <p class="members_name" style="color: #2e6da4;   margin-bottom: 0px;">ADESHINA</p>
                        <p class="members_name" style="color: #2e6da4;  font-weight: bolder; margin-bottom: 0px;">ADEWUMI</p>
                      </div>
                      <div class="in_div" style=" width: 30%; float: left; display: block; padding-left: 5px;">
                        <a href="https://www.linkedin.com/in/ajadewumi/" class="in_spacing" style="color: #2e6da4; border: #2e6da4 solid 2px; border-radius: 5px;"><i class="fa fa-linkedin"></i></a>
                      </div>
                    </div>
                    <div style="clear: both;"></div>
                </div>



               

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 members_image_div" style="border: solid 5px #2e6da4; border-radius: 20px; height: 100%;">
                    <img src="https://res.cloudinary.com/trade-lenda/image/upload/v1635776234/landing_page_pic/3_ezpdop.jpg" alt="/Ehis_img.jpeg" style="display:block; width: 100%; height: 100%;">
                    <div>
                        <div style="width:70%; padding-right:5px; border-right: 2px #2e6da4 solid; display: inline; float: left; margin-bottom: 4px; margin-bottom: 4px;">
                          <p class="members_name" style="color: #2e6da4; margin-bottom: 0px;">EHIS</p>
                          <p class="members_name" style="color: #2e6da4; font-weight: bolder; margin-bottom: 0px;">UZENABOR</p>
                        </div>
                        <div class="in_div" style=" width: 30%; float: left; display: block; padding-left: 5px;">
                          <a href="linkedin.com/in/ehis-uzenabor" class="in_spacing" style="color: #2e6da4; border: #2e6da4 solid 2px; border-radius: 5px;"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                      <div style="clear: both;"></div>
                </div>

                 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 members_image_div"></div>
                 <div class="col-sm-12 col-xs-12 members_image_div"></div>
            </div>
        </div> 
        <div class="leadership">
            <h1 class="heading leadership-header"> </h1>
            <p style="font-size: 19px; font-weight: bold; text-align: center;">Our Team Members</p>
        </div>
        
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 members_image_div" style=" height: 100%;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border: solid 5px #2e6da4; border-radius: 20px;">
                        <img src="https://res.cloudinary.com/trade-lenda/image/upload/v1635776234/landing_page_pic/4_kfxjdd.jpg" alt="Oluwatomisin_img.jpeg" style="display:block; width: 100%; height: 100%;">
                        <div>
                            <div style="width:70%; padding-right:5px; border-right: 2px #2e6da4 solid; display: inline; float: left; margin-bottom: 4px;">
                              <p class="members_name" style="color: #2e6da4; margin-bottom: 0px;">OLUWATOMISIN</p>
                              <p class="members_name" style="color: #2e6da4; font-weight: bolder; margin-bottom: 0px;">OLOYEDE</p>
                            </div>
                            <div class="in_div" style=" width: 30%; float: left; display: block; padding-left: 5px;">
                              <a href="linkedin.com/in/oluwatomisin-adewumi-john-aa1722150" class="in_spacing" style="color: #2e6da4; border: #2e6da4 solid 2px; border-radius: 5px;"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                          <div style="clear: both;"></div>
                    </div>
                </div> --}}
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 members_image_div" style=" height: 100%;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border: solid 5px #2e6da4; border-radius: 20px;">
                        <img src="https://res.cloudinary.com/trade-lenda/image/upload/v1635776233/landing_page_pic/5_u7cakn.jpg" alt="Shina_img.jpeg" style="display:block; width: 100%; height: 100%;">
                        <div>
                            <div style="width:70%; padding-right:5px; border-right: 2px #2e6da4 solid; display: inline; float: left; margin-bottom: 4px;">
                              <p class="members_name" style="color: #2e6da4; margin-bottom: 0px;">SHINA</p>
                              <p class="members_name" style="color: #2e6da4; font-weight: bolder; margin-bottom: 0px;">AROGUNDADE</p>
                            </div>
                            <div class="in_div" style=" width: 30%; float: left; display: block; padding-left: 5px;">
                              <a href="https://www.linkedin.com/in/shina-arogundade/" class="in_spacing" style="color: #2e6da4; border: #2e6da4 solid 2px; border-radius: 5px;"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                          <div style="clear: both;"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-3 members_image_div" style=" height: 100%;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border: solid 5px #2e6da4; border-radius: 20px;">
                        <img src="https://res.cloudinary.com/trade-lenda/image/upload/v1635776234/landing_page_pic/6_olgasj.jpg" alt="Oluwatosin_img.jpeg" style="display:block; width: 100%; height: 100%;">
                        <div>
                            <div style="width:70%; padding-right:5px; border-right: 2px #2e6da4 solid; display: inline; float: left; margin-bottom: 4px;">
                              <p class="members_name" style="color: #2e6da4; margin-bottom: 0px;">OLUWATOSIN</p>
                              <p class="members_name" style="color: #2e6da4; font-weight: bolder; margin-bottom: 0px;">AYODELE</p>
                            </div>
                            <div class="in_div" style=" width: 30%; float: left; display: block; padding-left: 5px;">
                              <a href="https://www.linkedin.com/in/tosan45/" class="in_spacing" style="color: #2e6da4; border: #2e6da4 solid 2px; border-radius: 5px;"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                          <div style="clear: both;"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-3 members_image_div" style=" height: 100%;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border: solid 5px #2e6da4; border-radius: 20px;">
                        <img src="https://res.cloudinary.com/trade-lenda/image/upload/v1635776234/landing_page_pic/7_mshmyh.jpg" alt="Onuoma_img.jpeg" style="display:block; width: 100%; height: 100%;">
                        <div>
                            <div style="width:70%; padding-right:5px; border-right: 2px #2e6da4 solid; display: inline; float: left; margin-bottom: 4px;">
                              <p class="members_name" style="color: #2e6da4; margin-bottom: 0px;">ONUOMA</p>
                              <p class="members_name" style="color: #2e6da4; font-weight: bolder; margin-bottom: 0px;">ALERECHI</p>
                            </div>
                            <div class="in_div" style=" width: 30%; float: left; display: block; padding-left: 5px;">
                              <a href="https://www.linkedin.com/in/onuoma-alerechi/" class="in_spacing" style="color: #2e6da4; border: #2e6da4 solid 2px;  border-radius: 5px;"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                          <div style="clear: both;"></div>
                    </div>
                </div>
            </div>
        </div>
       </div>
        <!--END-->
        <!--  <div class="hero-section pictures-company wf-section">
            <div class="container-pictures">
                <div class="infinite-scroll-wrapper">
                    <div class="coniner-div">
                        <div class="horizontal-div first-img"></div>
                        <div class="horizontal-div bottom"></div>
                    </div>
                    <div class="div-block-44"></div>
                    <div class="company-people-img"></div>
                </div>
                <div class="infinite-scroll-wrapper">
                    <div class="coniner-div">
                        <div class="horizontal-div first-img-2"></div>
                        <div class="horizontal-div bottom-2"></div>
                    </div>
                    <div class="middle-img"></div>
                    <div class="company-people-img-2"></div>
                </div>
            </div>
        </div> -->
        <!-- <div class="hero-section history-phase wf-section">
            <div class="container">
                <div class="providing-credit">
                    <h1 class="heading providing-f-services">We have been providing credit to Nigerian consumers for over 8 years…</h1>
                </div>
                <div data-w-id="568b786f-30f9-d164-04a5-3a13100f9169" style="-webkit-transform:translate3d(0, 55PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 55PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 55PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 55PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                    class="testimonial-wrapper">
                    <div data-delay="4000" data-animation="slide" class="slider-2 w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="true" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
                        <div class="mask-2 w-slider-mask">
                            <div class="slide-4 w-slide">
                                <div class="slide-wrap">
                                    <div class="history-title-container">
                                        <div class="tag-container">
                                            <div class="history-tag">
                                                <div class="text-block-18">2012</div>
                                            </div>
                                        </div>
                                        <div class="one-credit-block"><img src="images/one-credit.svg" width="100" alt="" class="carbon-history">
                                            <div class="carbon">The journey to democratize credit in Nigeria began</div>
                                        </div>
                                    </div>
                                    <div class="standard-paragraph">One Credit was founded in Lagos, Nigeria. The company provided loans to salary earners only, using a paper based application process that required supporting documentation.</div>
                                </div>
                            </div>
                            <div class="slide-4 w-slide">
                                <div class="slide-wrap">
                                    <div class="history-title-container">
                                        <div class="tag-container">
                                            <div class="history-tag">
                                                <div class="text-block-18">2015</div>
                                            </div>
                                        </div>
                                        <div class="one-fi-block"><img src="images/One-Fi.svg" width="100" alt="" class="carbon-history">
                                            <div class="carbon">More credit for more people…</div>
                                        </div>
                                    </div>
                                    <div class="standard-paragraph">The company broadened its service offering, leveraging a network of agents on the ground to get lending services in the hands of thousands of Nigerians under the OneFi brand.</div>
                                </div>
                            </div>
                            <div class="slide-4 w-slide">
                                <div class="slide-wrap">
                                    <div class="history-title-container">
                                        <div class="tag-container">
                                            <div class="history-tag">
                                                <div class="text-block-18">2016</div>
                                            </div>
                                        </div>
                                        <div class="profile-block"><img src="images/Image-65.svg" width="120" alt="" class="profile-image">
                                            <div class="faq-title">Going digital…</div>
                                        </div>
                                    </div>
                                    <div class="standard-paragraph">The Paylater mobile app was launched in May 2016. It was the first service of its kind. A fully digital consumer lending experience, available 24/7, that can get borrowed funds into a person’s account in minutes. After
                                        just 2 years in market, the Paylater mobile app was downloaded by over 1 million users.</div>
                                </div>
                            </div>
                            <div class="slide-4 w-slide">
                                <div class="slide-wrap">
                                    <div class="history-title-container">
                                        <div class="tag-container">
                                            <div class="history-tag">
                                                <div class="text-block-18">2019</div>
                                            </div>
                                        </div>
                                        <div class="carbon-block"><img src="images/Logo.svg" width="120" alt="" class="carbon-history">
                                            <div class="carbon">Enter Carbon…</div>
                                        </div>
                                    </div>
                                    <div class="standard-paragraph">As the suite of financial services offered in the app expanded from just loans and into payments, investments and personal finance management, the name ‘Paylater’ became a little limiting. Carbon represents our intent
                                        to offer the most diverse digital finance platform, anywhere.</div>
                                </div>
                            </div>
                        </div>
                        <div class="arrow-left w-slider-arrow-left">
                            <div class="arrow-icon w-icon-slider-left"></div>
                        </div>
                        <div class="arrow-right w-slider-arrow-right">
                            <div class="arrow-icon w-icon-slider-right"></div>
                        </div>
                        <div class="slide-nav w-slider-nav w-round"></div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="hero-section carbon-is-growing wf-section">
            <div class="about-hero-container">
                <div data-w-id="c0d256e8-b9c6-f78f-7af1-24267e0a741c" class="about-flex grow">
                    <div class="carbon-grow-title-wrapper">
                        <h1 class="heading grow-with-us">Lets grow together.</h1>
                    </div>
                </div>
                <p class="grow-copy">come and work with our team who enjoy and are passionate about their work and who exhibit both personal and professional pride in the products and services we provide to customers.</p>
                <div class="more-stories-container">
                    <a href="#" class="link">Visit Trade Lenda careers</a>
                    <div class="icon-link"></div>
                </div>
                <div class="image-contain---grow-with-us"></div>
            </div>
        </div>
        <div class="hero-section carbon-channels wf-section">
            <div class="channel-container">
                <h2 class="heading-5">One-Stop finance plug for Retailers</h2>
                <p class="paragraph-3">Create an account. Follow the directions on your screen. Access financing within 24 hours.</p>
                <div class="channel-icon-container">
                    <a href="#" target="_blank" class="channel-icons w-inline-block">
                        <div class="channel-link link-3"></div>
                    </a>
                    <a href="#" target="_blank" class="channel-icons apple-store2 w-inline-block">
                        <div class="channel-link"></div>
                    </a>
                    <a href="#" target="_blank" class="channel-icons web3 w-inline-block">
                        <div class="channel-link link-1"></div>
                    </a>
                    <a href="##" class="channel-icons last-icon w-inline-block">
                        <div class="channel-link link-2"></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer carbon-footer wf-section ">
            <div class="footer-container ">
                <div class="footer-column first-fcontent "><img src="https://res.cloudinary.com/trade-lenda/image/upload/v1628132872/landing_page_pic/Group_11434_2_umfio2.png" loading="lazy " width="120 " alt=" " class="image-10 ">
                    <div data-hover="false " data-delay="0 " class="dropdown-2 w-dropdown ">
                        <div class="dropdown-toggle w-dropdown-toggle ">
                            <div class="icon-4 "></div>
                            <div class="logo "><img src="https://res.cloudinary.com/trade-lenda/image/upload/v1634733818/landing_page_pic/Image-48_gxxqvf.svg" loading="lazy " alt=" "></div>
                            <div class="text-block-7 ">Nigeria</div>
                        </div>

                    </div>
                </div>
                <div class="footer-column footer-links ">
                    <h4 class="heading-6 ">Features</h4>
                    <a href="# " class="footer-links ">Trade Lenda account</a>
                    <a href="# " class="footer-links ">FMCG</a>
                    <a href="# " class="footer-links ">Ecommerce</a>
                    <a href="# " class="footer-links ">Structured markets</a>
                    <a href="# " class="footer-links ">Credit report</a>
                    <a href="# " class="footer-links ">Loans</a>
                </div>
                <div class="footer-column footer-links ">
                    <h4 class="heading-6 ">Learn more</h4>
                    <a href="# " class="footer-links ">Personal loans<br></a>
                    <a href="# " class="footer-links business ">Get loans fast</a>
                    <a href="# " class="footer-links business ">Loans in Nigeria<br></a>
                    <a href="# " class="footer-links business ">Trade Lenda loan</a>
                    <a href="# " class="footer-links business ">SME loans</a>
                    <a href="# " class="footer-links business ">Quick Finance</a>
                    <a href="# " class="footer-links business ">Trade Lenda app</a>
                    <a href="# " class="footer-links business ">Loans for business</a>
                    <a href="# " class="footer-links business ">Loans without collateral</a>
                </div>
                <div class="footer-column footer-links ">
                    <h4 class="heading-6 ">Company</h4>
                    <a href="{{url('/aboutus')}}" class="footer-links ">About us</a>
                    <a href="# " class="footer-links ">Media</a>
                    <a href="# " class="footer-links ">Careers</a>
                    <a href="# " target="_blank " class="footer-links ">Blog</a>
                    <a href="# " class="footer-links ">Customers</a>
                </div>
                <div class="footer-column footer-links _4th ">
                    <h4 class="heading-6 ">Help</h4>
                    <a href="# " target="_blank " class="footer-links ">Knowledge base</a>
                    <a href="# " class="footer-links ">Contact</a>
                    <a href="# " class="footer-links ">Community</a>
                </div>
                <div class="footer-column footer-links last-link-block ">
                    <h4 class="heading-6 ">Legal</h4>
                    <a href="# " class="footer-links ">Privacy policy</a>
                    <a href="{{url('/terms-and-conditions')}}" class="footer-links ">Terms &amp; Conditions</a>
                    <a href="# " class="footer-links ">Cookies</a>
                </div>
            </div>
            <div class="footer-socials ">
                <div class="appstores-containers ">
                    <div class="new-container ">
                        <h5 class="new ">Coming soon...</h5>
                    </div>
                    <a href="# " class="storelink-block-1 w-inline-block "><img src="https://res.cloudinary.com/trade-lenda/image/upload/v1634733398/landing_page_pic/Download_on_the_App_Store_Badge_1_rpi4qg.svg" loading="lazy " alt=" "></a>
                    <a href="# " class="storelink-block w-inline-block "><img src="https://res.cloudinary.com/trade-lenda/image/upload/v1634733562/landing_page_pic/Google_Play_Store_badge_EN_1_ayprcd.svg" loading="lazy " alt=" "></a>
                </div>
                <div class="social-media-container ">
                    <a href="{{url('https://facebook.com/tradelenda')}}" class="social-links w-inline-block "><img src="https://res.cloudinary.com/trade-lenda/image/upload/v1634728902/landing_page_pic/008-facebook_p7kkqs.svg" loading="lazy " alt=" "></a>
                    <a href="{{url('https://twitter.com/tradelenda')}}" class="social-links w-inline-block "><img src="https://res.cloudinary.com/trade-lenda/image/upload/v1634728815/landing_page_pic/001-twitter_n5dlsi.svg" loading="lazy " alt=" "></a>
                    <a href="{{url('https://instagram.com/tradelenda')}}" class="social-links w-inline-block "><img src="https://res.cloudinary.com/trade-lenda/image/upload/v1634728987/landing_page_pic/011-instagram_tawqze.svg" loading="lazy " alt=" "></a>
                    <!-- <a href="# " class="social-links w-inline-block "><img src="images/007-youtube.svg " loading="lazy " alt=" "></a> -->
                    <a href="{{url('https://linkedin.com/companytradelenda')}}" class="social-links w-inline-block "><img src="https://res.cloudinary.com/trade-lenda/image/upload/v1634729046/landing_page_pic/010-linkedin_isb2ox.svg" loading="lazy " alt=" "></a>
                </div>
            </div>
            <div class="footer-legal ">
                <div class="div-block-12 ">
                    <p class="paragraph-4 ">©2021 Trade Lenda is a financial service company that assists Micro, Small and Medium Entreperises with access to financing for business needs
                        <br><br>Registered address: 9b Ike Agsogwa Close, Maryland Lagos</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5fb7a41f1de43196d23310bb" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/webflow.js" type="text/javascript"></script>
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
    <script type="application/javascript" async="" src="https://static.klaviyo.com/onsite/js/klaviyo.js?company_id=UgAZFS"></script>
    <style>
        .w-slide {
            opacity: 0.5 !important;
            transition: all 0.5s ease !important;
        }
        
        .w-slide.active {
            opacity: 1 !important;
        }
    </style>
    <script>
        Webflow.push(function() {
            setInterval(function() {
                $('.w-slider').each(function(i, slider) {
                    var num = $('.w-slider-dot.w-active', slider).index();
                    $('.w-slide', slider).removeClass('active').eq(num).addClass('active');
                });
            }, 250);
        });
    </script>
    <script>
        $(function() {
            $('.play-button').click(function() {
                $('.modal').fadeIn();
                $('.modal-background').fadeIn();
                e.stopPropagation();
            });
            $('.overlay-bg').click(function() {
                $('.modal').fadeOut();
                $('.overlay-bg').fadeOut();
            });
            $(document).keydown(function(event) {
                if (event.keyCode == 27) {
                    $('.video-container').fadeOut();
                    $('.overlay-bg').fadeOut();
                }
            });
        });
    </script>
    <!-- Start of tradelendasupport Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=d958fe34-52d4-4992-9be8-8aef80d9811c"> </script>
    <!-- End of tradelendasupport Zendesk Widget script -->
</body>
<!-- Copied from https://ng.getcarbon.co/about.html by Cyotek WebCopy 1.6.0.559, Saturday, October 30, 2021, 3:31:34 AM -->

</html>