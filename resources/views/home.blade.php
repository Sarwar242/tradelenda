@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

@include('pages.aside')

<link href="css/site_style_file.css" rel="stylesheet" type="text/css">

<div class="dashb">
    <div class="container container_con" style="background-color: white; padding: 15px 5px 10px;">
        <div class="row" style="margin-right: 0px; margin-left:0px;">
            <div class="col-md-8 col-sm-9 col-xs-10">
                <p style="margin-bottom: 0px; font-weight: bold;">Dashboard</p>
                <div style="font-size: 0.75rem;">Hi <span>{{ucfirst(strtolower(Auth::user()->first_name))}}</span>, {{$greetings}} </div>
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
        {{-- <div class="row" style="margin-right: 0px; margin-left:0px;">
            <div class="col-md-6 col-sm-9 col-xs-9">
                
                <p style="margin-bottom: 0px; font-weight: bold;">Dashboard</p>
                <div style="font-size: 0.75rem;">Hi <span>{{ucfirst(strtolower(Auth::user()->first_name))}}</span>, {{$greetings}} </div>
            </div>
            <div class="col-md-4 col-sm-3 col-xs-2 profilepic_con" style="text-align: right">

                <div style="height: 40px;  position: inherit; display: inline-block">
                    <img src="{{auth()->user()->user_image ?  auth()->user()->user_image:asset('https://res.cloudinary.com/trade-lenda/image/upload/v1638360234/profile_image/User_doik8h.png')}}" onclick="openNav()" class="user-profile-img rounded-circle"  style="height: 100%; width: 40px; margin-right:5px" alt="Profile Image" />
                </div>
                <div class="User_Name_con" style="top: -10px; position: relative;">
                    <p style="margin-bottom: 0px; font-weight: bold;font-size: 0.8571428571428571rem;">{{ucfirst(strtolower(Auth::user()->first_name))}}  {{ucfirst(strtolower(Auth::user()->last_name))}}</p>
                    <div style="float: left;font-size: 0.75rem;">{{ucfirst(strtolower( Auth::user()->business_name))}}</div>
                </div>
            </div>
        </div> --}}
    </div>   @if(empty(Auth::user()->bvn) || empty(Auth::user()->business_address)|| empty(Auth::user()->bank_name))
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

        <section class="page-title-bar d-flex flex-wrap justify-content-between mb-3">

            {{-- @php dd(App\Sure::where('email', auth()->user()->email)->count() ) @endphp --}}

            <div class="actions d-flex flex-wrap ml-auto">
            @if(App\Sure::where('email', auth()->user()->email)->count()== 0 || empty(Auth::user()->bvn) || empty(Auth::user()->business_address)|| empty(Auth::user()->bank_name))
               
            @else
            <button class="btn btn-primary" onclick="window.location.href='/request/loan'">
                New Loan Request
            </button>
           
                <select name="" id="" class="custom-select ml-1">
                        <option value="This Month" selected>This Month</option>
                        <option value="This Year">This Year</option>
                        <option value="Custom Date">Custom Date</option>
                    </select>
                    @endif
            </div>
        </section>
        <section class="row loan-stats justify-content-sm-cefnter justify-content-md-start">
            <div class="col-lg-4 col-md-6 col-sm-6 mt-md-0 mt-2">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text mb-1">Loan amount collected</p>
                        <h4 class="card-title font-weight-bold mb-0">₦{{number_format($data['disbursed'])}}.00<img src="https://res.cloudinary.com/trade-lenda/image/upload/v1624866378/icons/Vector_1_o7i2li.png" style="float:right"></h4>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mt-md-0 mt-2">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text mb-1">Loan amount not paid</p>
                        <h4 class="card-title font-weight-bold mb-0">₦{{number_format($data['unpaid'])}}.00<img src="https://res.cloudinary.com/trade-lenda/image/upload/v1624866378/icons/Vector_1_o7i2li.png" style="float:right"></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mt-lg-0 mt-2">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text mb-1">Loan under process</p>
                        <h4 class="card-title font-weight-bold mb-0">₦{{number_format($data['processing'])}}.00<img src="https://res.cloudinary.com/trade-lenda/image/upload/v1624866378/icons/Vector_1_o7i2li.png" style="float:right"></h4>
                    </div>
                </div>
            </div>
        </section>

        @if(App\Loans::where('email', auth()->user()->email)->count() == 0)
        <div class="container container_con" style="padding-left: 0px; padding-right: 0px; height: 100%;">
            <div class="row" style="margin-top: 1rem!important;">
                <div class="col-md-8 col-sm-12 loan_history_div" style=" border-radius: 5px; background-color: white; text-align: center; padding: 80px 0px;">
                    <div>
                        <div style="height: 80px;">
                            <img src="img/favicon.png" alt="Trade Lenda logo" style="height: 100%; display:inline-block;" />
                        </div>
                        <p style="font-weight: bold;">Loan History</p>
                        @if(empty(Auth::user()->bvn) || empty(Auth::user()->business_address)|| empty(Auth::user()->bank_name))
                        <div style="padding-left: 20px; padding-right: 20px;">You haven't taken any loan yet. complete your profile to access a loan instantly</div>
                        <a href="{{url('/profile')}}"><button class="btn btn-primary" style="margin-top: 1rem;">Complete Your Profile</button></a>
                        @else
                        <div style="padding-left: 20px; padding-right: 20px;">Kindly click the button below to request a loan. </div>
                        <button class="btn btn-primary" style="margin-top: 1rem;">Request Loan</button>
                        @endif
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 right_siderbar" style="padding-right: 0px;">
                    <div class="row">
                        <div class="col-md-12" style="background-color: white; margin-bottom: 15px; border-radius: 5px; padding-left: 0px; padding-right: 0px;">
                            <div style="  border-bottom: 1px solid gray; padding: 10px;">
                                <p style="font-weight: bold; padding: 0px 5px;">Pending Tasks</p>
                            </div>
                            <div>
                                <a href="{{url('/kyc/personal')}}" style="text-decoration: none; color: black;"><p style="border-bottom: 1px solid gray; padding:14px 8px 14px 15px; font-size: 0.8571428571428571rem">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 21" style="width:30px; height:30px; display:inline-block;"><g transform="translate(-.065)"><circle cx="10.5" cy="10.5" r="10.5" transform="translate(.065)" fill="#d3d9e3"></circle><path d="M8.9 12.3L14.2 7l.7.7-6 6-2.8-2.8.7-.7z" fill="#fff"></path></g></svg> Add Personal Information
                                    <svg viewBox="0 0 24 24" focusable="false" style="width:30px;float: right; transition: width 1s;"><path d="M0 0h24v24H0z" fill="none"></path><path d="M8.59,16.59L13.17,12L8.59,7.41L10,6l6,6l-6,6L8.59,16.59z"></path></svg>
                                </p></a>
                            </div>
                            <div>
                                <a href="{{url('/kyc/business')}}" style="text-decoration: none; color: black;"><p style="border-bottom: 1px solid gray; padding:0px 8px 14px 15px; font-size: 0.8571428571428571rem">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 21" style="width:30px; height:30px; display:inline-block;"><g transform="translate(-.065)"><circle cx="10.5" cy="10.5" r="10.5" transform="translate(.065)" fill="#d3d9e3"></circle><path d="M8.9 12.3L14.2 7l.7.7-6 6-2.8-2.8.7-.7z" fill="#fff"></path></g></svg> Add Business Information
                                    <svg class="svghover" viewBox="0 0 24 24" focusable="false" style="width:30px;float: right;"><path d="M0 0h24v24H0z" fill="none"></path><path d="M8.59,16.59L13.17,12L8.59,7.41L10,6l6,6l-6,6L8.59,16.59z"></path></svg>
                                </p></a>
                            </div>
                            <div>
                                <a href="{{url('/kyc/financial')}}" style="text-decoration: none; color: black;"><p style="border-bottom: 1px solid gray; padding:0px 8px 14px 15px;font-size: 0.8571428571428571rem">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 21" style="width:30px; height:30px; display:inline-block;"><g transform="translate(-.065)"><circle cx="10.5" cy="10.5" r="10.5" transform="translate(.065)" fill="#d3d9e3"></circle><path d="M8.9 12.3L14.2 7l.7.7-6 6-2.8-2.8.7-.7z" fill="#fff"></path></g></svg> Add Financial Infomation
                                    <svg viewBox="0 0 24 24" focusable="false" style="width:30px;float: right;"><path d="M0 0h24v24H0z" fill="none"></path><path d="M8.59,16.59L13.17,12L8.59,7.41L10,6l6,6l-6,6L8.59,16.59z"></path></svg>
                                </p></a>
                            </div>
                        </div>
                        <div class="col-md-12 right_siderbar" style="background-color:white; border-radius: 5px; padding-left: 0px; padding-right: 0px;">
                            <div style="  border-bottom: 1px solid gray; padding: 10px;">
                                <p style="font-weight: bold; padding: 0px 5px;">Frequently Asked Questions</p>
                            </div>
                            <div style="padding: 25px 15px">
                                <p><a href="#" class="questns_links">How do i qualify for a Tradelenda loan?</a></p>
                                <p><a href="#" class="questns_links">What documents do i need to request a loan?</a></p>
                                <p><a href="#" class="questns_links">What happens when i cannot repay my loan on time?</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                 
        @else
        <section class="mt-4">
            
            <h6 class="page-title font-weight-bold d-inline-block mr-1">
                Loan Applications
            </h6>
            <button class="btn btn-primary" onclick="window.location.href ='/loans'">View All</button>
        </section>
        
        
    
        <!-- GRID SECTION -->
        <section class="table-responsive-lg mt-3 loan-applications">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>REASON</th>
                        <th>(₦)AMOUNT</th>
                        <th>LOAN TENOR</th>
                        <th>INTEREST(%)</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach($mem as $members)
                    <tr>
                        <td class="text-primary">{{$members->reason}}</td>
                        <td>₦{{number_format($members->amount)}}.00</td>
                        <td>{{$members->loan_tenor}}</td>
                        <td>{{$members->interest}}%</td>
                        <td>{{$members->status}}</td>
                        <td><a href="{{url('/view/loan/details/'.$members->id)}}" class="text-primary">
                            <button class="btn btn-sm btn-subtle">View More</button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        <!-- PAGINATION SECTION -->
    <section>
        <ul class="pagination justify-content-end">
            <div class="page-item">{{ $mem->links() }}</div>
        </ul>
    </section>
    @endif

        <!-- The Modal -->
        <div class="modal fade alert" id="alertModal">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <!-- Modal body -->
                    <div class="modal-body text-center">
                        <span class="fa fa-times-circle closebtn" data-dismiss="modal"></span>
                        <h5 class="modal-title font-weight-bold mb-2">
                            Add a Guarantor
                        </h5>
                        <p>
                            You need to add a guarantor before you can request for a loan
                        </p>
                        <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cancel</button>
                        <a href="{{url('/createguarantor')}}" class="btn btn-primary ml-1">Add</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
