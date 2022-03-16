@extends('layouts.app')
@section('title', '|| Dashboard')

@section('content')

@include('pages.aside')

<link href="css/site_style_file.css" rel="stylesheet" type="text/css"/>

@if(Session::has('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">
        x
    </button>
    <strong>
        {!! session('success') !!}
    </strong>
</div>
@endif
@if(Session::has('failed'))
<div class="alert alert-error alert-block">
    <button type="button" class="close" data-dismiss="alert">
        x
    </button>
    <strong>
        {!! session('failed') !!}
    </strong>
</div>
@endif

@if($errors->any())
@foreach ($errors->all() as $error)
    <div class="alert alert-error alert-block">
        <button type="button" class="close" data-dismiss="alert">
            x
        </button>
        <strong>
            {{$error}}
        </strong>
    </div>
@endforeach
@endif
</div>
@php
$user = auth()->user();
@endphp
<div class="dashb">
    <div class="container container_con" style="background-color: white; padding: 15px 5px 5px;">
        <div class="row" style="margin-right: 0px; margin-left:0px;">
            <div class="col-md-8 col-sm-9 col-xs-10">
                <p style="margin-bottom: 0px; font-weight: bold;">Complete Your Financial Information</p>
                <div style="font-size: 0.75rem;"> You need to complete a few more things before you would be able to apply for a loan </div>
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
    <main class="jss43 min-h-[calc(100vh-195px)] md:min-h-[calc(100vh-180px)]">

      <div class="bg-transparent flex justify-between items-center space-x-2 -mt-1 md:-mt-3">
        <h6 class="go-back font-weight-bold text-primary">
            <i class="fa fa-long-arrow-left pr-2"></i> Back
        </h6>
      </div>
      <div class="container" style="background-color: white; border-radius: 8px; margin-bottom: 10px; padding-top: 10px;">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 div1"></div>
            <div class="col-lg-6 col-md-6 col-sm-6 div2">
                <section>
                    <form id="profileUpdateForm" class="profile-update-forms tab-container col-12"  method="POST" action="{{ route('kyc.financial.update') }}" novalidate="novalidate" enctype="multipart/form-data">
                    @csrf
                        {{-- <div class="form-group">
                        <label for="bankName">Bank name</label>
                        <input type="text" value="{{$user->bank_name}}" class="form-control" id="bankName" name="bank_name">
                    </div> --}}
                    <div class="form-group">
                        <label for="bank">Bank name</label>
                        <select class="form-control" id="bankName" name="bank_name">
                            <option value=""></option>
                            <option value="Access Bank" @if ($user->bank_name == "Access Bank") selected
                                @endif>Access Bank</option>
                                <option value="Citibank" @if ($user->bank_name == "Citibank") selected
                                    @endif>Citibank</option>
                                <option value="Ecobank" @if ($user->bank_name == "Ecobank") selected
                                    @endif>Ecobank</option>
                            <option value="Fidelity Bank" @if ($user->bank_name == "Fidelity Bank") selected
                                @endif>Fidelity Bank</option>
                                <option value="FCMB" @if ($user->bank_name == "FCMB") selected
                                    @endif>FCMB</option>
                                    <option value="First Bank" @if ($user->bank_name == "First Bank") selected
                                        @endif>First Bank</option>
                                        <option value="Guaranty Trust Bank" @if ($user->bank_name == "Guaranty Trust Bank") selected
                                            @endif>Guaranty Trust Bank</option>
                                            <option value="Heritage Bank" @if ($user->bank_name == "Heritage Bank") selected
                                                @endif>Heritage Bank</option>
                                                <option value="Keystone Bank" @if ($user->bank_name == "Keystone Bank") selected
                                                    @endif>Keystone Bank</option>
                                                    <option value="Polaris Bank" @if ($user->bank_name == "Polaris Bank") selected
                                                        @endif>Polaris Bank</option>
                                                        <option value="Stanbic IBTC Bank" @if ($user->bank_name == "Stanbic IBTC Bank") selected
                                                            @endif>Stanbic IBTC Bank</option>
                                                            <option value="Standard Chartered" @if ($user->bank_name == "Standard Chartered") selected
                                                                @endif>Standard Chartered</option>
                                                                <option value="Sterling Bank" @if ($user->bank_name == "Sterling Bank") selected
                                                                    @endif>Sterling Bank</option>
                                                                    <option value="Unity Bank" @if ($user->bank_name == "Unity Bank") selected
                                                                        @endif>Unity Bank</option>
                                            <option value="Union Bank" @if ($user->bank_name == "Union Bank") selected
                                                @endif>Union Bank</option>
                                                <option value="United Bank for Africa" @if ($user->bank_name == "United Bank for Africa") selected
                                                    @endif>United Bank for Africa</option>
                                                    <option value="Wema Bank" @if ($user->bank_name == "Wema Bank") selected
                                                        @endif>Wema Bank</option>
                                                    <option value="Zenith Bank" @if ($user->bank_name == "Zenith Bank") selected
                                                        @endif>Zenith Bank</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="accountName">Connect Bank: </label>
                        &nbsp;&nbsp; <input type="button" onclick="connectViaOptions()" class="btn btn-success btn-lg"  value="{{ !is_null(auth()->user()->customer_id)? 'Connected' :'Connect Bank' }}">
                    </div>
                    <div class="form-group">
                        <label for="accountName">Account name</label>
                        <input type="text" value="{{$user->bank_account_name}}" class="form-control" id="accountName" name="bank_account_name">
                    </div>
                    <div class="form-group">
                        <label for="accountNumber">Account number</label>
                        <input type="text" value="{{$user->bank_account_number}}" class="form-control" id="accountNumber" name="bank_account_number">
                    </div>
                    <div class="form-group">
                        <label for="hasOnlineBanking">Has online banking?</label>
                        <select class="form-control" name="has_online_banking" id="hasOnlineBanking">
                            <option value=""></option>
                            <option value="1" @if ($user->has_online_banking == 1) selected
                                @endif>Yes</option>
                            <option value="0" @if ($user->has_online_banking == 0) selected
                                @endif>No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lastLoanPeriod">Have you taken out a loan in the past 12 months?</label>
                        <select class="form-control" name="last_loan_period" id="lastLoanPeriod">
                            <option value=""></option>
                            <option value="1" @if ($user->last_loan_period == 1) selected
                                @endif>Yes</option>
                            <option value="0" @if ($user->last_loan_period == 0) selected
                                @endif>No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="loan_amount">If yes, how much?</label>
                        <input type="text" value="{{$user->loan_amount}}" class="form-control" id="loan_amount" name="loan_amount">
                    </div>
                     <div class="form-group">
                        <label for="drag-area">Upload bank statement</label>
                        <div class="drag-area">
                            <div class="icon"><i class="fa fa-cloud-upload"></i></div>
                            <p>Drag your file here or <button type="button">browse</button></p>
                            <p class="upload-format-wrapper">
                                File format PDF
                                <span class="d-block">PDF Size 5mb max</span>
                            </p>
                            <input type="file" id="bankStatementFileUpload" name="bank_statement" hidden>
                        </div>
                        <p class="text-center" id="stat5"></p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 div3"></div>
        </div>
      </div>
      <div class="save_btn_div">
        <button class="save_btn" tabindex="0" type="submit" {{is_null(auth()->user()->customer_id)? 'disabled':'' }} >
            <span class="MuiButton-label">Save Documents</span>
            <span class="MuiTouchRipple-root"></span>
        </button>
      </div>
    </form>
    </main>
  </main>
@endsection
@section('script')
    <script>
        var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
    </script>
    <script type="text/JavaScript" src="{{ asset('js/filesupload.js')}}"></script>
    <script src='https://cdn.okra.ng/v2/bundle.js'></script>
    <script type='text/javascript'>
        function connectViaOptions(){
          Okra.buildWithOptions({
            name: 'Trade Lenda',
            env: 'production',
            key: '19d11ad5-8344-59c8-8fb8-dfb141ea1805',
            token: '61ebf0e7c0d71d001dd8fcea',
            source: 'integration',
            color:  '#24348B',
            limit: '3',
            corporate: null,
            connectMessage: 'Select an account to continue',


            products: ["auth","transactions","identity"],
            callback_url: 'null',
            redirect_url: '',
            logo: 'https://res.cloudinary.com/trade-lenda/image/upload/v1628132872/landing_page_pic/Group_11434_2_umfio2.png',
            institutions: ["first-bank-of-nigeria","united-bank-for-africa","guaranty-trust-bank","access-bank","zenith-bank","kuda-bank","stanbic-ibtc-bank","first-city-monument-bank"],
            widget_success: 'Your account was successfully linked to Trade Lenda',
            widget_failed: 'An unknown error occurred, please try again.',
            currency: 'NGN',
            mode: 'primary',
            continue_cta: 'Continue',
            multi_account: 'true',
            exp: null,
            success_title: "You've successfully linked to Trade Lenda!",
            success_message: 'With your bank account linked, you would be able to access the best financial services & products.',

              onSuccess: async function(data){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var fd = new FormData();
                fd.append('customer_id', data.auth.customer_id);
                fd.append('name', data.accounts[0].name);
                fd.append('bank_name', data.auth.bank_details.name);
                fd.append('nuban', data.accounts[0].nuban);
                console.log(data.auth.customer_id);
                console.log(data.auth.bank_details.name);
                console.log(data.accounts[0].name);
                console.log(data.accounts[0].nuban);
                await $.ajax({
                    url: "/financialinfo/connectokra",
                    method: 'post',
                    data : fd,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        window.location.reload();
                    },
                    error: function(response) {
                        console.log("error : " + JSON.stringify(response));
                    }
                });
                    console.log('success', data)
                },
                onClose: function(){
                    console.log('closed')
                }
            });
        }
    </script>
    <script type='text/javascript'>
        function connectViaCode(){
          Okra.buildWithShortUrl({
              short_url: 'tradelenda-link',
              onSuccess: function(data){
                  console.log('success', data)
              },
              onClose: function(){
                  console.log('closed')
              }
          })
        }
    </script>
@endsection
