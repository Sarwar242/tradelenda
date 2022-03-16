@extends('layouts.app')
@section('title', '|| Profile')
@section('content')

@include('pages.aside')

<link href="css/site_style_file.css" rel="stylesheet"/>


<div class="dashb">
    <div class="container container_con" style="background-color: white; padding: 15px 5px 10px;">
        <div class="row" style="margin-right: 0px; margin-left:0px;">
            <div class="col-md-8 col-sm-9 col-xs-10">
                <p style="margin-bottom: 0px; font-weight: bold;">Complete Your Profile</p>
                <div style="font-size: 0.75rem;"> You need to complete a few more things before you would be able to apply for a loan </div>
            </div>
            <div class="col-md-4 col-sm-3 col-xs-2 profilepic_con HomeAndProfilePage_PpImg" style="text-align: right; height:0px;">

                <div style="height: 40px; position: inherit; display: inline-block">
                    <img src="{{auth()->user()->user_image ?  auth()->user()->user_image:asset('https://res.cloudinary.com/trade-lenda/image/upload/v1638360234/profile_image/User_doik8h.png')}}" onclick="openNav()" class="user-profile-img rounded-circle"  style="height: 100%; width: 40px; margin-right:5px" alt="Profile Image" />
                </div>
                <div class="User_Name_con" style="top: -22px; position: relative;">
                    <p style="margin-bottom: 0px; font-weight: bold;font-size: 0.8571428571428571rem;">{{ucfirst(strtolower(Auth::user()->first_name))}}  {{ucfirst(strtolower(Auth::user()->last_name))}}</p>
                    <div style="float: left;font-size: 0.75rem;">{{ucfirst(strtolower( Auth::user()->business_name))}}</div>
                </div>
            </div>
        </div>
    </div>
       @if(empty(Auth::user()->bvn) || empty(Auth::user()->business_address)|| empty(Auth::user()->bank_name)|| empty(Auth::user()->customer_id))
    <div style="background-color: rgb(163, 84, 163);">
        <p style="padding: 5px 15px; color: white; font-size: 0.75rem;">Your profile is incomplete. <a href="{{url('/profile')}}" id="dashb_link">Click to complete your profile</a></p>
    </div>
@else
@endif
</div>


        <main class="main">
             <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/site.js') }}" defer></script>
            <main class="jss8 min-h-[calc(100vh-195px)] md:min-h-[calc(100vh-180px)]">
                <main class="min-h-[calc(100vh-195px)] md:min-h-[calc(100vh-180px)]">
                    <div class="space-y-14">
                        <section class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                            <div class="MuiPaper-root MuiCard-root jss14 small MuiPaper-elevation0 MuiPaper-rounded">
                                <div class="MuiCardContent-root">
                                    <div class="space-y-6">
                                        <div class="flex space-x-3 justify-between">
                                            <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 3rem;">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.36 42.383">
                                                    <path d="M27.62 10.207a9.878 9.878 0 01-2.99 7.218 9.878 9.878 0 01-7.218 2.99 9.879 9.879 0 01-7.213-2.99 9.877 9.877 0 01-2.99-7.218 9.876 9.876 0 012.99-7.217A9.875 9.875 0 0117.407 0a9.881 9.881 0 017.218 2.99 9.877 9.877 0 012.995 7.217zm0 0" fill="#35B44A"></path>
                                                    <path d="M35.36 35.094a7.036 7.036 0 01-2.09 5.324 7.524 7.524 0 01-5.386 1.965H7.476a7.52 7.52 0 01-5.385-1.965A7.035 7.035 0 010 35.094c0-.851.028-1.693.084-2.5a25.056 25.056 0 01.344-2.679 21.14 21.14 0 01.658-2.692 13.351 13.351 0 011.107-2.512 9.506 9.506 0 011.669-2.175 7.361 7.361 0 012.4-1.507 8.291 8.291 0 013.061-.554 3.1 3.1 0 011.658.7c.505.329 1.087.7 1.73 1.115a9.873 9.873 0 002.235.985 8.911 8.911 0 002.464.437h.271a8.89 8.89 0 002.736-.442 9.873 9.873 0 002.236-.985c.649-.415 1.231-.79 1.729-1.114a3.1 3.1 0 011.659-.7 8.3 8.3 0 013.061.554 7.367 7.367 0 012.4 1.507 9.472 9.472 0 011.669 2.175 13.3 13.3 0 011.107 2.511 21.123 21.123 0 01.659 2.693 25.294 25.294 0 01.343 2.678c.051.809.079 1.651.08 2.505zm0 0" fill="#24348B ">
                                                    </path>
                                                    <path d="M17.415 20.416V0a9.881 9.881 0 017.218 2.99 9.877 9.877 0 012.99 7.217 9.878 9.878 0 01-2.99 7.218 9.878 9.878 0 01-7.218 2.991zm0 0" fill="#35B44A"></path>
                                                    <path d="M35.361 35.094a7.036 7.036 0 01-2.09 5.324 7.524 7.524 0 01-5.386 1.965H17.408V23.714h.271a8.891 8.891 0 002.736-.442 9.873 9.873 0 002.236-.985c.649-.415 1.231-.79 1.729-1.114a3.1 3.1 0 011.659-.7 8.3 8.3 0 013.061.554 7.367 7.367 0 012.4 1.507 9.472 9.472 0 011.669 2.175 13.3 13.3 0 011.107 2.511 21.121 21.121 0 01.659 2.693 25.293 25.293 0 01.343 2.678c.053.807.082 1.649.083 2.503zm0 0" fill="#24348B"></path>
                                                </svg>


                                            </svg>
                                            <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 2.2rem;">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 21">
                                              <g transform="translate(-.065)">
                                                  <circle cx="10.5" cy="10.5" r="10.5" transform="translate(.065)" fill="#d3d9e3"></circle>
                                                  <path d="M8.9 12.3L14.2 7l.7.7-6 6-2.8-2.8.7-.7z" fill="#fff"></path>
                                              </g>
                                          </svg>
                                            </svg>
                                        </div>
                                        <h6 class="MuiTypography-root !font-semibold MuiTypography-h6 MuiTypography-gutterBottom">Add Personal Information</h6>
                                        <p class="MuiTypography-root MuiTypography-body1">You need to add more information about your business..</p>
                                        <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-disableElevation" tabindex="0" type="button" style="outline: none;">
                                            <a href="{{url('/kyc/personal')}}" style="text-decoration: none; color:white;"><span class="MuiButton-label">Add Details</span></a>
                                      <span class="MuiTouchRipple-root"></span>
                                  </button>
                                    </div>
                                </div>
                            </div>
                            <div class="MuiPaper-root MuiCard-root jss14 small MuiPaper-elevation0 MuiPaper-rounded">
                                <div class="MuiCardContent-root">
                                    <div class="space-y-6">
                                        <div class="flex space-x-3 justify-between">
                                            <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 3rem;">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36.123 47.423">
                                                    <path d="M36.123 12.5L26.4 9.725 23.619 0H4.168A4.168 4.168 0 000 4.168v39.087a4.168 4.168 0 004.168 4.168h27.787a4.168 4.168 0 004.168-4.168z" fill="#24348B"></path>
                                                    <path d="M36.124 12.5v30.755a4.168 4.168 0 01-4.168 4.168H18.062V0h5.557l2.779 9.725z" fill="#35B44A"></path>
                                                    <path d="M36.119 12.5h-9.725a2.787 2.787 0 01-2.775-2.775V0a1.3 1.3 0 01.972.417l11.115 11.115a1.3 1.3 0 01.413.968z" fill="#24348B "></path><path d="M26.398 22.322H9.725a1.39 1.39 0 010-2.779h16.672a1.39 1.39 0 010 2.779zM26.398 27.88H9.725a1.39 1.39 0 010-2.779h16.672a1.39 1.39 0 010 2.779zM26.398 33.437H9.725a1.39 1.39 0 010-2.779h16.672a1.39 1.39 0 010 2.779zM20.836 38.995H9.725a1.39 1.39 0 010-2.779h11.111a1.39 1.39 0 110 2.779z" fill="#fff5f5"></path>
                                                    <g>
                                                        <path d="M18.062 38.994h2.779a1.39 1.39 0 100-2.779h-2.779zM18.062 33.437h8.336a1.39 1.39 0 000-2.779h-8.336zM18.062 27.879h8.336a1.39 1.39 0 100-2.779h-8.336zM18.062 22.322h8.336a1.39 1.39 0 000-2.779h-8.336z" fill="#e3e7ea"></path>
                                                      </g>
                                                  </svg>
                                            </svg>
                                            <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 2.2rem;">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 21">
                                              <g transform="translate(-.065)">
                                                  <circle cx="10.5" cy="10.5" r="10.5" transform="translate(.065)" fill="#d3d9e3"></circle>
                                                  <path d="M8.9 12.3L14.2 7l.7.7-6 6-2.8-2.8.7-.7z" fill="#fff"></path>
                                              </g>
                                          </svg>
                                            </svg>
                                        </div>
                                        <h6 class="MuiTypography-root !font-semibold MuiTypography-h6 MuiTypography-gutterBottom">Add Business Information</h6>
                                        <p class="MuiTypography-root MuiTypography-body1">Please upload the necessary documents required before you request a loan</p>
                                        <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-disableElevation" tabindex="0" type="button" style="outline: none;">
                                      <a href="{{url('/kyc/business')}}" style="text-decoration: none; color:white;"><span class="MuiButton-label">Add Details</span></a>
                                      <span class="MuiTouchRipple-root"></span>
                                  </button>
                                    </div>
                                </div>
                            </div>
                            <div class="MuiPaper-root MuiCard-root jss14 small MuiPaper-elevation0 MuiPaper-rounded">
                                <div class="MuiCardContent-root">
                                    <div class="space-y-6">
                                        <div class="flex space-x-3 justify-between"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 3rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.661 43.903">
                          <path d="M31.797 2.866a9.809 9.809 0 00-13.857 0l-8.908 8.905a9.8 9.8 0 0013.859 13.857l8.905-8.905a9.81 9.81 0 00.001-13.857zm-2.794 11.063l-8.906 8.906a5.847 5.847 0 01-8.265-8.27l8.9-8.906a5.847 5.847 0 018.27 8.269zm0 0" fill="#35B44A"></path><path d="M12.118 25.628a9.81 9.81 0 010-13.857l8.906-8.905A9.744 9.744 0 0126.41.122a9.79 9.79 0 00-8.471 2.744l-8.907 8.905a9.8 9.8 0 008.471 16.6 9.745 9.745 0 01-5.385-2.743zm0 0" fill="#35B44A"></path>
                          <path d="M25.124 17.807a9.811 9.811 0 00-13.354.468l-4.649 4.649-4.256 4.256a9.8 9.8 0 0013.857 13.857l8.905-8.906a9.806 9.806 0 00-.503-14.324zm-2.29 11.531l-8.905 8.905a5.847 5.847 0 01-8.27-8.269l3.878-3.873 2.806-2.806 2.222-2.222a5.854 5.854 0 017.754-.456 5.857 5.857 0 01.515 8.721zm0 0" fill="#24348B "></path><path d="M5.949 41.037a9.81 9.81 0 010-13.857l4.256-4.256 4.649-4.649a9.742 9.742 0 015.386-2.744 9.791 9.791 0 00-8.47 2.744l-4.649 4.649-4.256 4.256a9.8 9.8 0 008.471 16.6 9.747 9.747 0 01-5.387-2.743zm0 0" fill="#24348B"></path>
                          <path d="M9.033 25.628a9.848 9.848 0 00.937.826l2.9-2.792a5.825 5.825 0 01-2.748-4.76l-3.338 3.229a9.736 9.736 0 002.249 3.497zm0 0" fill="#00aaf0"></path><path d="M9.971 26.453l1.543-1.487a9.756 9.756 0 01-2.212-5.273l-2.518 2.432a9.787 9.787 0 003.187 4.328zm0 0" fill="#35B44A"></path></svg></svg>
                                            <svg
                                                class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 2.2rem;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 21"><g transform="translate(-.065)">
                            <circle cx="10.5" cy="10.5" r="10.5" transform="translate(.065)" fill="#d3d9e3"></circle>
                            <path d="M8.9 12.3L14.2 7l.7.7-6 6-2.8-2.8.7-.7z" fill="#fff"></path></g>
                          </svg>
                                                </svg>
                                        </div>
                                        <h6 class="MuiTypography-root !font-semibold MuiTypography-h6 MuiTypography-gutterBottom">Add Financial Infomation &amp; Guarantor</h6>
                                        <p class="MuiTypography-root MuiTypography-body1">You will need to add one person as a guarantor.</p>
                                        <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-disableElevation" tabindex="0" type="button" style="outline: none;">
                                            <a href="{{url('/kyc/financial')}}" style="text-decoration: none; color:white;"><span class="MuiButton-label">Add Details</span></a>
                        <span class="MuiTouchRipple-root"></span></button>
                                    </div>
                                </div>
                            </div>
                        </section>



                        <section class="grid gap-8 grid-cols-1 xl:grid-cols-8">
                            <div class="xl:col-span-5">
                                <h5 class="MuiTypography-root !font-semibold MuiTypography-h5 MuiTypography-colorTextPrimary">Having Issues Uploading Documents?</h5>
                                <p class="MuiTypography-root !mb-8 MuiTypography-body1">Here’s a video guide that shows how you can upload documents</p>
                                <div style="position: relative; padding-bottom: 51.0938%; height: 0px;">

                                    <iframe src="../../video/i was flunking.mp4" frameborder="0" allowfullscreen="" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                    </iframe>
                                </div>
                            </div>
                            <div class="xl:col-span-3">
                                <div class="MuiPaper-root MuiCard-root jss14 small MuiPaper-elevation0 MuiPaper-rounded">
                                    <div class="MuiCardHeader-root">
                                        <div class="MuiCardHeader-content">
                                            <span class="MuiTypography-root MuiCardHeader-title MuiTypography-h6 MuiTypography-displayBlock">Frequently Asked Questions</span>
                                        </div>
                                    </div>
                                    <div style="padding: 2rem 15px;">
                                        <article class="space-y-3">
                                            <button class="MuiButtonBase-root MuiButton-root MuiButton-text !underline !p-0 !text-trade-blue !block MuiButton-disableElevation MuiButton-fullWidth" tabindex="0" type="button" style="outline: none;">
                          <span class="MuiButton-label">
                            <h6 class="MuiTypography-root !w-full MuiTypography-subtitle1 MuiTypography-colorInherit MuiTypography-displayBlock"><a href="#">How do I qualify for a Tradelenda loan?</a></h6>
                          </span>
                        </button>
                                            <div class="MuiBackdrop-root jss16" aria-hidden="true" style="opacity: 0; visibility: hidden;"></div>
                                            <button class="MuiButtonBase-root MuiButton-root MuiButton-text !underline !p-0 !text-trade-blue !block MuiButton-disableElevation MuiButton-fullWidth" tabindex="0" type="button" style="outline: none;"><span class="MuiButton-label">
                          <h6 class="MuiTypography-root !w-full MuiTypography-subtitle1 MuiTypography-colorInherit MuiTypography-displayBlock"><a href="#">What documents do I need to request a loan?</a></h6></span>
                        </button>
                                            <div class="MuiBackdrop-root jss16" aria-hidden="true" style="opacity: 0; visibility: hidden;">
                                            </div>
                                            <button class="MuiButtonBase-root MuiButton-root MuiButton-text !underline !p-0 !text-trade-blue !block MuiButton-disableElevation MuiButton-fullWidth" tabindex="0" type="button" style="outline: none;"><span class="MuiButton-label">
                        <h6 class="MuiTypography-root !w-full MuiTypography-subtitle1 MuiTypography-colorInherit MuiTypography-displayBlock"><a href="#">What happens when I cannot repay my loan on time?</a></h6></span>
                        </button>
                                            <div class="MuiBackdrop-root jss16" aria-hidden="true" style="opacity: 0; visibility: hidden;">
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </main>
            </main>
        </main>



        <!--- footer div start-->
       {{--  <div style="clear: both; position: relative; background-color: red;">
            <div id="div_display">
                <ul style="float: right;">
                    <li class="dropdown_links"><a href="#" style="color: white; text-decoration: none; display: block; padding: 0px 20px;">Credit Score</a></li>
                    <li class="dropdown_links"><a href="#" style="color: white; text-decoration: none; display: block;  padding: 0px 20px;">Get Started</a></li>
                    <li class="dropdown_links"><a href="#" style="color: white; text-decoration: none; display: block;  padding: 0px 20px;">Log Out</a></li>
                </ul>
            </div>
            <div class="carrier_svg_con">
                <aside class="lg:col-span-2 xl:col-span-1 sticky bottom-0 lg:top-0 lg:h-screen lg:overflow-y-scroll remove-scrollbar">
                    <div class="MuiBottomNavigation-root">
                        <button class="MuiButtonBase-root MuiBottomNavigationAction-root Mui-selected" tabindex="0" type="button" style="outline: none;">
                        <span class="MuiBottomNavigationAction-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                <g fill="#f0f0f0">
                                    <path d="M8.461 4.63a.884.884 0 01.083.274l.232 3.45.115 1.734a1.783 1.783 0 00.083.526.869.869 0 00.838.526l5.548-.363a.915.915 0 01.645.25.883.883 0 01.266.507l.01.117a7.235 7.235 0 01-5.737 6.515 7.38 7.38 0 01-7.993-3.553 6.845 6.845 0 01-.83-2.62 5.015 5.015 0 01-.054-.824 7.246 7.246 0 015.82-7.065.909.909 0 01.974.526z"></path>
                                    <path d="M10.726 1.667a7.87 7.87 0 017.608 6.51l-.006.027-.017.039v.108a.667.667 0 01-.16.393.689.689 0 01-.385.226l-.091.013-6.4.415a.764.764 0 01-.583-.189.736.736 0 01-.239-.442l-.429-6.4a.1.1 0 010-.067.654.654 0 01.215-.458.679.679 0 01.487-.175z" opacity="0.8"></path>
                                </g>
                            </svg>
                            <span class="MuiBottomNavigationAction-label Mui-selected">Dashboard</span>
                        </span>
                        <span class="MuiTouchRipple-root"></span>
                    </button>
                        <button class="MuiButtonBase-root MuiBottomNavigationAction-root" tabindex="0" type="button" style="outline: none;">
                        <span class="MuiBottomNavigationAction-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                <g fill="#f0f0f0">
                                    <path d="M11.389 1.417h2.4a1.806 1.806 0 011.8 1.813v2.419a1.806 1.806 0 01-1.8 1.813h-2.4a1.806 1.806 0 01-1.8-1.813V3.23a1.806 1.806 0 011.8-1.813"></path>
                                    <path d="M11.387 15.584a1.806 1.806 0 01-1.8-1.813v-2.419a1.806 1.806 0 011.8-1.814h2.4a1.806 1.806 0 011.8 1.814v2.419a1.806 1.806 0 01-1.8 1.813zm-8.171 0a1.806 1.806 0 01-1.799-1.814v-2.418a1.806 1.806 0 011.8-1.814h2.4a1.806 1.806 0 011.8 1.814v2.419a1.806 1.806 0 01-1.8 1.813zm0-8.121a1.806 1.806 0 01-1.799-1.814V3.23a1.806 1.806 0 011.8-1.813h2.4a1.805 1.805 0 011.8 1.813v2.419a1.805 1.805 0 01-1.8 1.813z" opacity="0.8"></path>
                                </g>
                            </svg>
                            <span class="MuiBottomNavigationAction-label">Loans</span>
                        </span>
                        <span class="MuiTouchRipple-root"></span>
                    </button>
                        <button class="MuiButtonBase-root MuiBottomNavigationAction-root" tabindex="0" type="button" style="outline: none;">
                        <span class="MuiBottomNavigationAction-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                <defs>
                                    <style>.referral_svg__a,.referral_svg__b{fill:#f0f0f0}.referral_svg__b{opacity:.8}</style>
                                </defs>
                                <path class="referral_svg__a" d="M7.791 12.381c-3.303 0-6.124.51-6.124 2.55s2.8 2.569 6.124 2.569c3.3 0 6.124-.51 6.124-2.55s-2.802-2.569-6.124-2.569"></path>
                                <path class="referral_svg__b" d="M7.792 10.437a4 4 0 004.052-3.968A4 4 0 007.792 2.5a4 4 0 00-4.053 3.969 4 4 0 004.053 3.968M13.478 6.541a5.306 5.306 0 01-.948 3.038.148.148 0 00.1.229 3.306 3.306 0 00.466.043 3.371 3.371 0 003.396-2.458 3.371 3.371 0 00-3.297-4.23 3.466 3.466 0 00-.682.068.123.123 0 00-.079.046.093.093 0 00.015.1 5.345 5.345 0 011.029 3.164"></path>
                                <path class="referral_svg__a" d="M18.15 12.641a2.658 2.658 0 00-2.052-1.223 15.3 15.3 0 00-3.122-.268.035.035 0 00-.032.025.045.045 0 00.028.046 4.172 4.172 0 012.557 4.106.172.172 0 00.195.193c.555-.077 1.984-.379 2.427-1.314a1.755 1.755 0 000-1.565"></path>
                            </svg>
                            <span class="MuiBottomNavigationAction-label">Referral</span>
                        </span>
                        <span class="MuiTouchRipple-root"></span>
                    </button>
                        <button class="MuiButtonBase-root MuiBottomNavigationAction-root" tabindex="0" type="button" style="outline: none;">
                        <span class="MuiBottomNavigationAction-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                <g fill="#f0f0f0">
                                    <path d="M9.997 12.645c-3.594 0-6.664.567-6.664 2.833s3.051 2.854 6.664 2.854c3.594 0 6.664-.566 6.664-2.833s-3.05-2.854-6.664-2.854"></path>
                                    <path d="M9.997 10.486a4.41 4.41 0 10-4.41-4.41 4.394 4.394 0 004.41 4.41" opacity="0.8"></path>
                                </g>
                            </svg>
                            <span class="MuiBottomNavigationAction-label">Profile</span>
                        </span><span class="MuiTouchRipple-root"></span>
                    </button>
                        <button id="clickmore" class="MuiButtonBase-root MuiBottomNavigationAction-root" tabindex="0" type="button" style="outline: none;">
                        <span class="MuiBottomNavigationAction-wrapper">
                            <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path>
                            </svg>
                            <span class="MuiBottomNavigationAction-label" >More</span>
                        </span><span class="MuiTouchRipple-root"></span>
                    </button>
                    </div>
                </aside>
            </div>
        </div> --}}
        <!--- footer div end-->



        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/site.js"></script>
        <script>
            /* show and hid more link dropdown script begins*/

            let btn = document.getElementById("clickmore")
            let div_c = document.getElementById("div_display")
            btn.addEventListener("click", () => {
                if (div_c.style.display === "block") {
                    div_c.style.display = "none";

                } else {
                    div_c.style.display = "block"
                }
            })

            /* show and hid more link dropdown script ends*/
        </script>
    </main>
@endsection
