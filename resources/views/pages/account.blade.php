@extends('layouts.app')
@section('title', '|| Profile')
@section('content')

@include('pages.aside')

<div class="dashb">
    <div class="container container_con" style="background-color: white; padding: 15px 5px 5px;">
        <div class="row" style="margin-right: 0px; margin-left:0px;">
            <div class="col-md-8 col-sm-9 col-xs-10">
                <p style="margin-bottom: 0px; font-weight: bold;">Account</p>
                <div style="font-size: 0.75rem;"> Account </div>
            </div>
            <div class="col-md-4 col-sm-3 col-xs-2 profilepic_con" style="text-align: right">

                <div style="height: 40px;  position: inherit; display: inline-block">
                    <img src="{{auth()->user()->user_image ?  auth()->user()->user_image:asset('https://res.cloudinary.com/trade-lenda/image/upload/v1638360234/profile_image/User_doik8h.png')}}" onclick="openNav()" class="user-profile-img rounded-circle"  style="height: 100%; width: 40px; margin-right:5px" alt="Profile Image" />
                </div>
                <div class="User_Name_con" style="top: -8px; position: relative;">
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
    <section class="account-page-wrapper">
        {{-- <section class="mobile-menu d-sm-none">
            <i class="fa fa-navicon pr-2 d-lg-none" style="cursor:pointer" onclick="openNav()"></i>
            <div class="mobile-menu_brand-logo">
                <img src="../../images/mobile-menu-logo.png" alt="Tradelender logo">
            </div>
        </section> --}}
        <section class="page-title-bar d-flex justify-content-between">
           {{--  <h4 class="page-title font-weight-bold d-sm-none">
                Account
            </h4> --}}

            <div class="edit-profile-button-container d-sm-none">
                <a href="{{url('/profile')}}" class="btn btn-block d-flex justify-content-between">
                    <span>Edit Profile </span>
                    <span><img src="../../images/edit-profile-icon.png" alt="Edit profile icon" /></span>
                </a>
            </div>

           {{--  <h4 class="page-title font-weight-bold d-none d-sm-block">
                <i class="fa fa-navicon pr-2 d-lg-none" style="cursor:pointer" onclick="openNav()"></i> Account
            </h4> --}}
        </section>

        <section class="account-profile-image-container">
           {{--  <div class="profile-image-wrapper">
                <img src="{{auth()->user()->user_image}}" alt="Profile Image" class="rounded-circle" width="102" height="102" />
                <div class="change-profile-image-wrapper">
                    <img src="../../images/camera-icon.png" alt="Profile Image" class="rounded-circle" width="12"
                        height="10.5" />
                </div>
            </div> --}}
        </section>
            <div class="edit-profile-button-container d-none d-sm-block">
                <a href="{{url('/profile')}}" class="btn btn-block d-flex justify-content-between">
                    <span >Edit Profile </span>
                     <span><img src="../../images/edit-profile-icon.png" alt="Edit profile icon"/></span>
                </a>
            </div>


        <section id="accountViewTabsContainer" class="accountTabsContainer bg-white mt-4">
            <section class="account-navigation-container mb-4">
                <nav class="account-navigation-bar">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#personalDetails">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#businessDetails">Business</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#financialDetails">Financial</a>
                        </li>
                    </ul>
                </nav>
            </section>

            <div id="personalDetails" class="tab-item row no-gutters justify-content-center px-3 px-md-0 active">
                <section class="col-md-5 col-sm-6 mr-md-3">
                    @php $accview=$accdata @endphp
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Title</p>
                            <h6 class=" card-text mb-0">{{$accview->title}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Email address</p>
                            <h6 class="card-text  mb-0">{{$accview->email}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Share in the company</p>
                            <h6 class="card-text mb-0">{{$accview->share}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Gender</p>
                            <h6 class="card-text mb-0">{{$accview->gender}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Identification type</p>
                            <h6 class="card-text  mb-0">{{$accview->id_type}}</h6>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Address</p>
                            <h6 class="card-text mb-0">{{$accview->address}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Country</p>
                            <h6 class="card-text mb-0">{{$accview->country? $accview->country->name: ''}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">LGA</p>
                            <h6 class="card-text mb-0">{{$accview->city? $accview->city->name: ''}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Marital status</p>
                            <h6 class="card-text mb-0">{{$accview->marital_status}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Number of dependents</p>
                            <h6 class="card-text mb-0">{{$accview->dependents}}</h6>
                        </div>
                    </div>
                </section>
                <section class="col-md-5 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Full name</p>
                            <h6 class="card-text mb-0">{{$accview->first_name}} {{$accview->last_name}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Position in the company</p>
                            <h6 class="card-text mb-0">{{$accview->position}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Date of birth</p>
                            <h6 class="card-text mb-0">{{$accview->dob}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">BVN</p>
                            <h6 class="card-text  mb-0">{{$accview->bvn}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">ID number</p>
                            <h6 class="card-text mb-0">{{$accview->id_num}}</h6>
                        </div>
                    </div>
                   {{--  <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Gender</p>
                            <h6 class="card-text mb-0">{{$accview->title}}</h6>
                        </div>
                    </div> --}}
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">State</p>
                            <h6 class="card-text mb-0">{{$accview->state? $accview->state->name: ''}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Residential Status</p>
                            <h6 class="card-text mb-0">{{$accview->residential_status}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">When did you move to this address?</p>
                            <h6 class="card-text mb-0">{{$accview->wdymtta}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Educational Level</p>
                            <h6 class="card-text mb-0">{{$accview->edu_level}}</h6>
                        </div>
                    </div>
                </section>
            </div>
            <div id="businessDetails" class="tab-item row no-gutters justify-content-center px-3 px-md-0">
                <section class="col-md-5 col-sm-6 mr-md-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Type of business</p>
                            <h6 class="card-text mb-0">{{$accview->business_type}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Is the business registered?</p>
                            <h6 class="card-text mb-0">{{$accview->registered == 1? "Yes":"No"}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Date of business establishment</p>
                            <h6 class="card-text mb-0">{{$accview->establishment_date}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Country</p>
                            <h6 class="card-text  mb-0">{{$accview->b_country? $accview->b_country->name: ''}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">LGA</p>
                            <h6 class="card-text mb-0">{{$accview->b_city? $accview->b_city->name: ''}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Are your business locations owned or rented?</p>
                            <h6 class="card-text mb-0">{{$accview->owned_or_rented}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Total of employees</p>
                            <h6 class="card-text mb-0">{{$accview->total_employees}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">What do you sell?</p>
                            <h6 class="card-text mb-0">{{$accview->sales_method}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Average monthly sales</p>
                            <h6 class="card-text mb-0">{{$accview->monthly_sales}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">How long have you been in business?</p>
                            <h6 class="card-text mb-0">{{$accview->business_duration}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">CAC7</p>
                            <h6 class="card-text mb-0">{{$accview->b_id_num}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Identification type</p>
                            <h6 class="card-text mb-0">{{$accview->b_id_type}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Seal of the Company</p>
                            <a href="#alertModal" class="card-link text-primary-dark" data-toggle="modal"
                                data-url="{{$accview->seal}}">
                                Click to view
                            </a>
                        </div>
                    </div>
                </section>
                <section class="col-md-5 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Name of business</p>
                            <h6 class="card-text mb-0">{{$accview->business_name}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Name of Director</p>
                            <h6 class="card-text mb-0">{{$accview->director}}</h6>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Name of Secretary</p>
                            <h6 class="card-text mb-0">{{$accview->secretary}}</h6>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">RC/BN number</p>
                            <h6 class="card-text mb-0">{{$accview->rc_num}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Business address</p>
                            <h6 class="card-text mb-0">{{$accview->business_address}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">State</p>
                            <h6 class="card-text  mb-0">{{$accview->b_state? $accview->b_state->name: ''}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">When did you move this business?</p>
                            <h6 class="card-text mb-0">{{$accview->b_wdymtta}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Number of outlets</p>
                            <h6 class="card-text">{{$accview->outlets}}</h6>
                        </div>
                    </div>
                    {{-- <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">How do you do business?</p>
                            <h6 class="card-text">{{$accview->sales_method}}</h6>
                        </div>
                    </div> --}}
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">What industry does your business belong to?</p>
                            <h6 class="card-text">{{$accview->industry}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Average monthly expenses</p>
                            <h6 class="card-text mb-0">{{$accview->monthly_expenses}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Tax Identification Number (TIN)</p>
                            <h6 class="card-text mb-0">{{$accview->tin}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">CAC2</p>
                            <a href="#alertModal" class="card-link text-primary-dark" data-toggle="modal"
                                data-url="{{$accview->cac2}}">
                                Click to view
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">CAC Certificate</p>
                            <a href="#alertModal" class="card-link text-primary-dark" data-toggle="modal"
                                data-url="{{$accview->cac_certificate}}">
                                Click to view
                            </a>
                        </div>
                    </div>
                </section>
            </div>
            <div id="financialDetails" class="tab-item row no-gutters justify-content-center px-3 px-md-0">
                <section class="col-md-5 col-sm-6 mr-md-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Bank name</p>
                            <h6 class="card-text">{{$accview->bank_name}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Account number</p>
                            <h6 class="card-text">{{$accview->bank_account_number}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Local purchasing order (LPO)</p>
                            <a href="#alertModal" class="card-link text-primary-dark" data-toggle="modal"
                                data-url="{{$accview->cac7}}">
                                Click to view
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Have you taken out a loan in the past 12 months?</p>
                            <h6 class="card-text">{{$accview->last_loan_period == 1? "Yes":"No"}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">If yes, how much</p>
                            <h6 class="card-text">{{$accview->loan_amount}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Bank statement</p>
                            <a href="#alertModal" class="card-link text-primary-dark" data-toggle="modal"
                                data-url="{{$accview->bank_statement}}">
                                Click to view
                            </a>
                        </div>
                    </div>
                </section>
                <section class="col-md-5 col-sm-6 d-flex flex-column">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Account name</p>
                            <h6 class="card-text">{{$accview->bank_account_name}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Has online banking</p>
                            <h6 class="card-text">{{$accview->has_online_banking == 1? "Yes":"No"}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Proforma invoice</p>
                            <a href="#alertModal" class="card-link text-primary-dark"
                                data-toggle="modal"
                                data-url="{{$accview->cac2}}">
                                Click to view
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </section>

        <!-- The Modal -->
        <div class="modal fade alert" id="alertModal">
            <div class="modal-dialog modal-dialkog-scrollable">
                <div class="modal-content">
                    <!-- Modal body -->
                    <div class="modal-body text-center">
                        <span class="fa fa-times-circle closebtn" data-dismiss="modal"></span>
                        <div class="blob-container">
                            <img class="img-fluid" src="#"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/site.js"></script>
@endsection
