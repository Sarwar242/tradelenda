@extends('layouts.app')

@section('content')

@include('pages.aside')

<link href="/css/site_style_file.css" rel="stylesheet" type="text/css"/>

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
                <p style="margin-bottom: 0px; font-weight: bold;">Complete Your Personal Information</p>
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
            <div id="uploadProfilePictureTab" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 8px">
                <section class="col-12 d-flex justify-content-center" id='pp2'>
                    <div class="profile-picture-container">
                        <div class="upload-profile-picture-box">
                            <p  class="text-center">Upload Profile Picture</p>
                            <div class="drag-area">
                                <div class="icon"><i class="fa fa-cloud-upload"></i></div>
                                <p>Drag your file here or <button type="button">browse</button></p>
                                <p class="upload-format-wrapper">
                                    File format JPEG, PNG
                                    <span class="d-block">Size 5mb max</span>
                                </p>
                                <input type="file" name="profilePictureUpload" form="profileUpdateForm" id="propic" hidden>


                            </div>

                        <p class="text-center" id="stat"></p>
                        </div>
                    </div>

                </section>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 div1">
              <section>
                <form id="profileUpdateForm" class="profile-update-forms tab-container col-12"  method="POST" action="{{ route('kyc.personal.update') }}" novalidate="novalidate" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" value="{{$user->title}}" id="title" name="title">
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-6">
                            <label for="fName">First name</label>
                            <input type="text" class="form-control" id="fName" value="{{$user->first_name}}"  name="first_name">
                        </div>

                        <div class="col-sm-6">
                            <label for="lName">Last name</label>
                            <input type="text" class="form-control" id="lName" value="{{$user->last_name}}" name="last_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="emailAddress">Email Address</label>
                        <input type="email" class="form-control" id="emailAddress" value="{{$user->email}}" name="email">
                    </div>
                    <div class="form-group">
                        <label for="positionInCompany">Position In Company</label>
                        <input type="text" class="form-control" id="positionInCompany" value="{{$user->position}}" name="position">
                    </div>
                    <div class="form-group">
                        <label for="shareInCompany">Share In Company</label>
                        <input type="text" class="form-control" id="shareInCompany" value="{{$user->share}}" name="share">
                    </div>
                    <div class="form-group">
                        <label for="DOB">Date of birth</label>
                        <input type="date" class="form-control" id="DOB" value="{{$user->dob}}" name="dob">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value=""></option>
                            <option value="Male" @if ($user->gender == "Male") selected
                                @endif>Male</option>
                            <option value="Female" @if ($user->gender == "Female") selected
                                @endif>Female</option>
                        </select>
                    </div>
                <div class="form-group">
                    <label for="bvn">BVN (Bank Verification Number)</label>
                    <input type="text" class="form-control" id="bvn" oninput="findInfo(event)" value="{{$user->bvn}}" name="bvn"/>
                    <input type="hidden" id="is_valid_bvn" name="is_valid_bvn"/>
                    <div id="bvnFeedback" class="invalid-feedback">
                        Please provide a valid BVN.
                    </div>
                </div>

                <div class="form-group">
                    <label for="identificationType">Identification Type</label>
                    <select class="form-control" id="identificationType" name="id_type">
                        <option value=""></option>
                        <option value="International Passport" @if ($user->id_type == "International Passport") selected
                            @endif>International Passport</option>
                        <option value="Driver's License" @if ($user->id_type == "Driver's License") selected
                            @endif>Driver's License</option>
                        <option value="NIN" @if ($user->id_type == "NIN") selected
                            @endif>NIN</option>
                        <option value="Voter's Card" @if ($user->id_type == "Voter's Card") selected
                            @endif>Voter's Card</option>
                    </select>
                </div>
            </section>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 div2">
              <section>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" value="{{$user->address}}" name="address">
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <select name="country"
                        class="form-control countries order-alpha include-AF-AL-DZ-BE-BO-CM-CV-GM-KE-MG-NG-TG-UG-ZW"
                        id="countryId">
                        @if(!is_null($user->country))
                            @foreach(App\Country::all() as $country)
                                <option value="{{ $country->id }}" @if($user->country->id==$country->id) selected @endif>
                                    {{$country->name}}</option>
                            @endforeach
                        @else
                            <option value="" selected='selected' disabled>
                                Select a Country</option>
                            @foreach(App\Country::all() as $country)
                                <option value="{{ $country->id }}">
                                    {{ $country->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-6">
                        <label for="State">State</label>
                        <select name="state" class="form-control states order-alpha" id="stateId">
                            <option value="" selected='selected' disabled>
                                Select</option>
                                @foreach(App\State::all() as $state)
                                    <option value="{{$state->id}}" {{ $user->state && $state->id== $user->state->id ? 'selected':''}} >
                                    {{$state->name}}</option>
                                @endforeach
                        </select>
                    </div>

                    <div class="col-sm-6">
                        <label for="lName">LGA</label>
                        <select name="city" class="form-control cities order-alpha" id="cityId">
                            @if(!is_null($user->city))
                                <option value="{{$user->city->id}}" selected>
                                {{$user->city->name}}</option>
                            @else
                                <option value="" selected='selected' disabled>
                                    Select</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="residentialStatus">Residential Status</label>
                    <select class="form-control" id="residentialStatus" name="residential_status">
                        <option value=""></option>
                        <option value="Home Owned"  @if ($user->residential_status == "Home Owned") selected
                            @endif>Home Owned</option>
                        <option value="Temporary or Rented" @if ($user->residential_status == "Temporary or Rented") selected
                            @endif>Temporary or Rented</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="maritalStatus">Marital Status</label>
                    <select class="form-control" id="maritalStatus" name="marital_status">
                        <option value=""></option>
                        <option value="Married"  @if ($user->marital_status == "Married") selected
                            @endif>Married</option>
                        <option value="Single" @if ($user->marital_status == "Single") selected
                            @endif>Single</option>
                        <option value="Divorced or Widowed" @if ($user->marital_status == "Divorced or Widowed") selected
                            @endif>Divorced or Widowed</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="wdymtta">When Did You Move To This Address?</label>
                    <input type="text" value="{{$user->wdymtta}}" class="form-control" id="wdymtta" name="wdymtta">
                </div>
                <div class="form-group">
                    <label for="noOfDependents">Number Of Dependents</label>
                    <input type="number" value="{{$user->dependents}}" class="form-control" id="noOfDependents" name="dependents">
                </div>
                <div class="form-group">
                    <label for="edu_level">Educational Level</label>
                    <select class="form-control" id="edu_level" name="edu_level">
                        <option value="Primary School"  @if ($user->edu_level == "Primary School") selected
                            @endif>Primary School</option>
                        <option value="Secondary School (O'level)" @if ($user->edu_level == "Secondary School (O'level)") selected
                            @endif>Secondary School (O'level)</option>
                        <option value="Ordinary National Diploma (OND)" @if ($user->edu_level == "Ordinary National Diploma (OND)") selected
                            @endif>Ordinary National Diploma (OND)</option>
                        <option value="Higher National Diploma (HND)" @if ($user->edu_level == "Higher National Diploma (HND)") selected
                            @endif>Higher National Diploma (HND)</option>
                            <option value="Bsc" @if ($user->edu_level == "Bsc") selected
                                @endif>Bsc</option>
                        <option value="Msc" @if ($user->edu_level == "Msc") selected
                            @endif>Msc</option>
                        <option value="Pgd" @if ($user->edu_level == "Pgd") selected
                            @endif>Pgd</option>
                        <option value="PhD" @if ($user->edu_level == "PhD") selected
                            @endif>PhD</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="idNumber">ID number</label>
                    <input type="text" class="form-control" id="idNumber" value="{{$user->id_num}}" name="id_num">
                </div>
            </section>
            </div>
        </div>
      </div>
      <div class="save_btn_div">
        <button class="save_btn" tabindex="0" type="submit">
          <span class="MuiButton-label">Save Documents</span>
          <span class="MuiTouchRipple-root"></span>
        </button>
      </div>
    </form>
    </main>
  </main>
  <script>
    var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
</script>

  <script src="{{ asset('js/jquery.min.js')}}"></script>
<script type="text/JavaScript" src="{{ asset('js/filesupload.js')}}"></script>
{{-- persional --}}
<script>
    $(document).on('change','#countryId',function(){
        var country = $("#countryId").val();
        $("#stateId").html("");
        var option = " ";
    //send an ajax req to servers
        $.get("/get-states/" +
        country,
        function(data) {
        option = "<option selected disabled>Select one</option>";
            var d = JSON.parse(data);
            d.forEach(function(element) {
                // console.log(element.id);
                option += "<option value='" + element.id + "'>" + element.name + "</option>";
            });

            $("#stateId").html(option);
        });
    });



    $(document).on('change','#stateId',function(){
        var state = $("#stateId").val();
        $("#cityId").html("");
        var option = " ";
    //send an ajax req to servers
        $.get("/get-cities/" +
        state,
        function(data) {
        option = "<option selected disabled>Select one</option>";
            var d = JSON.parse(data);
            d.forEach(function(element) {
                // console.log(element.id);
                option += "<option value='" + element.id + "'>" + element.name + "</option>";
            });

            $("#cityId").html(option);
        });
    });
</script>
<script src="{{ asset('js/verify_okra.js')}}"></script>
@endsection
