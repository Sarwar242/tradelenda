@extends('layouts.app')
 
@section('content')

<main class="main ml-0">
    <script src="{{ asset('js/jquery.min.js')}}"></script>
<div class="container">
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

                <div class="text-center">
                    <button type="button" class="btn btn-primary" onclick="goToAccountSetupTab()">Continue</button>
                </div>
            </div>
        </section>
    <div id="uploadProfilePictureTab" class="row align-items-start">
        <section class="brand-logo-top-container" style="width:130px !important; height: 100px !important;" >
            <img src="https://res.cloudinary.com/trade-lenda/image/upload/v1624865053/icons/Vector_Smart_Object_s9v7ek.png" alt="brand-logo" class="img-fluid">
        </section>
        
    </div>

    <div id="accountSetupTab" class="bg-white row flex-column d-none">
        <section class="accountSetup-navigation-container d-flex flex-column">
            <h4 class="page-title text-center font-weight-bold">
                Account Setup
            </h4>
            <nav class="accountSetup-navigation-bar">
                <ul class="nav">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">
                            <span class="icon-container">
                                <i class="fa fa-user"></i>
                            </span>
                            <span class="d-block">PERSONAL DETAILS</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="icon-container">
                                <i class="fa fa-user"></i>
                            </span>
                            <span class="d-block">BUSINESS DETAILS</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="icon-container">
                                <i class="fa fa-user"></i>
                            </span>
                            <span class="d-block">FINANCIAL DETAILS</span>
                        </a>
                    </li>
                    <span class="line-through"></span>
                </ul>

            </nav>
        </section>
        <section class="mt-4">
            <form id="profileUpdateForm" class="profile-update-forms tab-container col-12"  method="POST" action="{{ route('editprofile.update') }}" novalidate="novalidate" enctype="multipart/form-data">
                @csrf
                <div id="personalDetails" class="tab-item active row justify-content-center">
                    <section class="col-lg-4 col-md-5 col-sm-6">
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
                            <label for="DOB">Date of birth</label> <h3>{{$user->dob}}</h3>
                            <input type="date" class="form-control" id="DOB" name="dob">
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
                            <input type="text" class="form-control" id="bvn" value="{{$user->bvn}}" name="bvn">
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
                        <div class="form-group">
                            <label for="idNumber">ID number</label>
                            <input type="text" class="form-control" id="idNumber" value="{{$user->id_num}}" name="id_num">
                        </div>
                    </section>
                    <section class="col-lg-4 col-md-5 col-sm-6">
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
                                    @if(!is_null($user->state))
                                        <option value="{{$user->state->id}}" selected>
                                        {{$user->state->name}}</option>
                                    @else
                                        <option value="" selected='selected' disabled>
                                            Select</option>
                                    @endif
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
                    </section>
                    <section class="col-12 col-md-10 col-lg-8 action text-center mt-4">
                        <button type="button" class="btn w-100 btn-primary" onclick="goToNextTab(event)">Continue</button>
                    </section>
                </div>
                <div id="businessDetails" class="tab-item row justify-content-center">
                    <section class="col-lg-4 col-md-5 col-sm-6">
                        <div class="form-group">
                            <label for="typeOfBusiness">Type of business</label>
                            <select class="form-control" id="typeOfBusiness" name="business_type">
                                <option value=""></option>
                                <option value="Unspecified"  @if ($user->business_type == "Unspecified") selected
                                    @endif>Unspecified</option>
                                <option value="Sole Propritorship" @if ($user->business_type == "Sole Propritorship") selected
                                    @endif>Sole Propritorship</option>
                                <option value="Partnership" @if ($user->business_type == "Partnership") selected
                                    @endif>Partnership</option>
                                <option value="Limited Liability Company" @if ($user->business_type == "Limited Liability Company") selected
                                    @endif>Limited Liability Company</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nameOfBusiness">Name of business</label>
                            <input type="text" value="{{$user->business_name}}" class="form-control" id="nameOfBusiness" name="business_name">
                        </div>
                        <div class="form-group">
                            <label for="nameOfDirector">Name of Director</label>
                            <input type="text" value="{{$user->director}}" class="form-control" id="nameOfDirector" name="director">
                        </div>
                        <div class="form-group">
                            <label for="nameOfSecretary">Name of Secretary</label>
                            <input type="text" value="{{$user->secretary}}" class="form-control" id="nameOfSecretary" name="secretary">
                        </div>
                        <div class="form-group">
                            <label for="businessRegistered2">Is the business registered</label>
                            <select class="form-control" id="businessRegistered2" name="registered">
                                <option value=""></option>
                                <option value="1" @if ($user->registered == 1) selected
                                    @endif>Yes</option>
                                <option value="0" @if ($user->registered == 0) selected
                                    @endif>No</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="rcNumber">RC/BN number</label>
                            <input type="text" value="{{$user->rc_num}}" class="form-control" id="rcNumber" name="rc_num">
                        </div>
                        <div class="form-group">
                            <label for="DOBEstablishment">Date of business establishment</label> <h3>{{$user->establishment_date}}</h3>
                            <input type="date" class="form-control" id="DOBEstablishment" name="establishment_date">
                        </div>
                        <div class="form-group">
                            <label for="businessAddress">Business address</label>
                            <input type="text" value="{{$user->business_address}}" class="form-control" id="businessAddress" name="business_address">
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <select name="b_country"
                                class="form-control countries order-alpha include-AF-AL-DZ-BE-BO-CM-CV-GM-KE-MG-NG-TG-UG-ZW"
                                id="bcountryId">
                                @if(!is_null($user->b_country))
                                @foreach(App\Country::all() as $country)
                                    <option value="{{ $country->id }}" @if($user->b_country->id==$country->id) selected @endif>
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
                                <label for="b_state">State</label>
                                <select name="b_state" class="form-control states order-alpha" id="bstateId">
                                    @if(!is_null($user->b_state))
                                        <option value="{{$user->b_state->id}}" selected>
                                        {{$user->b_state->name}}</option>
                                    @else
                                        <option value="" selected='selected' disabled>
                                            Select</option>
                                    @endif
                                </select>
                            </div>

                            <div class="col-sm-6">
                                <label for="b_lga">LGA</label>
                                <select name="b_lga" class="form-control cities order-alpha" id="bcityId">
                                    @if(!is_null($user->b_city))
                                        <option value="{{$user->b_city->id}}" selected>
                                        {{$user->b_city->name}}</option>
                                    @else
                                        <option value="" selected='selected' disabled>
                                            Select</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="wdymttas">When did you move to this address?</label>
                            <input type="text" value="{{$user->b_wdymtta}}" class="form-control" id="wdymttas" name="b_wdymtta">
                        </div>
                        <div class="form-group">
                            <label for="ownedOrRented">Is your business owned or rented?</label>
                            <select class="form-control" name="owned_or_rented" id="ownedOrRented">
                                <option value=""></option>
                                <option value="Owned" @if ($user->owned_or_rented == "Owned") selected
                                    @endif>Owned</option>
                                <option value="Rented" @if ($user->owned_or_rented == "Rented") selected
                                    @endif>Rented</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="noOfOutlets">Number of outlets</label>
                            <input type="number" value="{{$user->outlets}}" class="form-control" id="noOfOutlets" name="outlets">
                        </div>
                        <div class="form-group">
                            <label for="totalNumberOfEmployees">Total number of employees</label>
                            <input type="number" value="{{$user->total_employees}}" class="form-control" id="totalNumberOfEmployees"
                                name="total_employees">
                        </div>
                        <div class="form-group">
                            <label for="howDoYouSell">How do you sell?</label>
                            <select class="form-control" name="sales_method" id="howDoYouSell">
                                <option value=""></option>
                                <option value="I sell online (jumia, konga etc)" @if ($user->sales_method == "I sell online (jumia, konga etc)") selected
                                    @endif>I sell online (jumia, konga etc)</option>
                                <option value="I distribute FMCG goods" @if ($user->sales_method == "I distribute FMCG goods") selected
                                    @endif>I distribute FMCG goods</option>
                                <option value="I buy and sell agro-commodities" @if ($user->sales_method == "I buy and sell agro-commodities") selected
                                    @endif>I buy and sell agro-commodities</option>
                                <option value="I have a physical shop" @if ($user->sales_method == "I have a physical shop") selected
                                    @endif>I have a physical shop</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="industry">Which industry does your business belong to?</label>
                            <select class="form-control" name="industry" id="industry">
                                <option value=""></option>
                                <option value="Agriculture" @if ($user->industry == "Agriculture") selected
                                    @endif>Agriculture</option>
                                <option value="Autos" @if ($user->industry == "Autos") selected
                                    @endif>Autos</option>
                                <option value="Beauty Products" @if ($user->industry == "Beauty Products") selected
                                    @endif>Beauty Products</option>
                                <option value="Fashion" @if ($user->industry == "Fashion") selected
                                    @endif>Fashion</option>
                                <option value="Food & Beverages" @if ($user->industry == "Food & Beverages") selected
                                    @endif>Food & Beverages</option>
                                <option value="Furniture & Fittings" @if ($user->industry == "Furniture & Fittings") selected
                                    @endif>Furniture & Fittings</option>
                                <option value="Health & Pharma Products" @if ($user->industry == "Health & Pharma Products") selected
                                    @endif>Health & Pharma Products</option>
                                <option value="Electronics" @if ($user->industry == "Electronics") selected
                                    @endif>Electronics</option>
                                <option value="Household Appliances" @if ($user->industry == "Household Appliances") selected
                                    @endif>Household Appliances</option>
                                <option value="Industrialgoods" @if ($user->industry == "Industrialgoods") selected
                                    @endif>Industrialgoods</option>
                                <option value="Office Supplies" @if ($user->industry == "Office Supplies") selected
                                    @endif>Office Supplies</option>
                                <option value="Packaging and Plastic" @if ($user->industry == "Packaging and Plastic") selected
                                    @endif>Packaging and Plastic</option>
                                <option value="Personal Care" @if ($user->industry == "Personal Care") selected
                                    @endif>Personal Care</option>
                                <option value="Consulting Services" @if ($user->industry == "Consulting Services") selected
                                    @endif>Consulting Services</option>
                                <option value="Education" @if ($user->industry == "Education") selected
                                    @endif>Education</option>
                                <option value="Home Services" @if ($user->industry == "Home Services") selected
                                    @endif>Home Services</option>
                                <option value="Logistics" @if ($user->industry == "Logistics") selected
                                    @endif>Logistics</option>
                                <option value="Media and Entertainments" @if ($user->industry == "Media and Entertainments") selected
                                    @endif>Media and Entertainments</option>
                                <option value="Professional Services" @if ($user->industry == "Professional Services") selected
                                    @endif>Professional Services</option>
                                <option value="Tecnology Services" @if ($user->industry == "Tecnology Services") selected
                                    @endif>Tecnology Services</option>
                                <option value="Utility Services" @if ($user->industry == "Utility Services") selected
                                    @endif>Utility Services</option>
                                <option value="Agency Banking" @if ($user->industry == "Agency Banking") selected
                                    @endif>Agency Banking</option>
                            </select>
                        </div>
                    </section>
                    <section class="col-lg-4 col-md-5 col-sm-6">
                        <div class="form-group">
                            <label for="monthlySales">Average monthly sales</label>
                            <select class="form-control" name="monthly_sales" id="monthlySales">
                                <option value=""></option>
                                <option value="0-1M" @if ($user->monthly_sales == "0-1M") selected
                                    @endif>0-1M</option>
                                <option value="1-5M" @if ($user->monthly_sales == "1-5M") selected
                                    @endif>1-5M</option>
                                <option value="6-10M" @if ($user->monthly_sales == "6-10M") selected
                                    @endif>6-10M</option>
                                <option value="11-20M" @if ($user->monthly_sales == "11-20M") selected
                                    @endif>11-20M</option>
                                <option value="21-40M" @if ($user->monthly_sales == "21-40M") selected
                                    @endif>21-40M</option>
                                <option value=">40M"  @if ($user->monthly_sales == ">40M") selected
                                    @endif>>40M</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="monthlyExpenses">Average monthly expenses</label>
                            <select class="form-control" name="monthly_expenses" id="monthlyExpenses">
                                <option value=""></option>
                                <option value="0-1M" @if ($user->monthly_expenses == "0-1M") selected
                                    @endif>0-1M</option>
                                <option value="1-5M" @if ($user->monthly_expenses == "1-5M") selected
                                    @endif>1-5M</option>
                                <option value="6-10M" @if ($user->monthly_expenses == "6-10M") selected
                                    @endif>6-10M</option>
                                <option value="11-20M" @if ($user->monthly_expenses == "11-20M") selected
                                    @endif>11-20M</option>
                                <option value="21-40M" @if ($user->monthly_expenses == "21-40M") selected
                                    @endif>21-40M</option>
                                <option value=">40M" @if ($user->monthly_expenses == ">40M") selected
                                    @endif>>40M</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="businessDuration">How long have you been in business?</label>
                            <select class="form-control" name="business_duration" id="businessDuration">
                                <option vlaue=""></option>
                                <option value="0-1" @if ($user->business_duration == "0-1") selected
                                    @endif>0 -1</option>
                                <option value="1-3" @if ($user->business_duration == "1-3") selected
                                    @endif>1-3</option>
                                <option value="3-5" @if ($user->business_duration == "3-5") selected
                                    @endif>3-5</option>
                                <option value="5-10" @if ($user->business_duration == "5-10") selected
                                    @endif>5-10</option>
                                <option value="10+" @if ($user->business_duration == "10+") selected
                                    @endif>10+</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tin">Tax Identification Number(TIN)</label>
                            <input type="text" value="{{$user->tin}}" class="form-control" id="tin" name="tin">
                        </div>
                        <div class="form-group">
                            <label for="identificationType2">Identification type</label>
                            <select class="form-control" name="b_id_type" id="identificationType2">
                                <option value=""></option>
                                <option value="International Passport" @if ($user->b_id_type == "International Passport") selected
                                    @endif>International Passport</option>
                                <option value="Driver's License" @if ($user->b_id_type == "Driver's License") selected
                                    @endif>Driver's License</option>
                                <option value="NIN" @if ($user->b_id_type == "NIN") selected
                                    @endif>NIN</option>
                                <option value="Voter's Card" @if ($user->b_id_type == "Voter's Card") selected
                                    @endif>Voter's Card</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="idNumber">ID number</label>
                            <input type="text" value="{{$user->b_id_num}}" class="form-control" id="idNumber" name="b_id_num">
                        </div>
                        <div class="form-group">
                            <label for="seal">Seal of the Company</label>
                            <div class="drag-area">
                                <div class="icon"><i class="fa fa-cloud-upload"></i></div>
                                <p>Drag your file here or <button type="button">browse</button></p>
                                <p class="upload-format-wrapper">
                                    File format JPEG, PNG
                                    <span class="d-block">PDF Size 5mb max</span>
                                </p>
                                <input type="file" id="sealFileUpload" name="seal" hidden>
                            </div>
                            <p class="text-center" id="stat0"></p>
                        </div>
                        <div class="form-group">
                            <label for="cac7">CAC7</label>
                            <div class="drag-area">
                                <div class="icon"><i class="fa fa-cloud-upload"></i></div>
                                <p>Drag your file here or <button type="button">browse</button></p>
                                <p class="upload-format-wrapper">
                                    File format JPEG, PNG
                                    <span class="d-block">PDF Size 5mb max</span>
                                </p>
                                <input type="file" id="cac7FileUpload" name="cac7" hidden>
                            </div>
                            <p class="text-center" id="stat2"></p>
                        </div>
                        <div class="form-group">
                            <label for="cac2">CAC2</label>
                            <div class="drag-area">
                                <div class="icon"><i class="fa fa-cloud-upload"></i></div>
                                <p>Drag your file here or <button type="button">browse</button></p>
                                <p class="upload-format-wrapper">
                                    File format JPEG, PNG
                                    <span class="d-block">PDF Size 5mb max</span>
                                </p>
                                <input type="file" id="cac2FileUpload" name="cac2" hidden>
                            </div>
                            <p class="text-center" id="stat3"></p>
                        </div>
                        <div class="form-group">
                            <label for="cacCertificate">CAC certificate</label>
                            <div class="drag-area">
                                <div class="icon"><i class="fa fa-cloud-upload"></i></div>
                                <p>Drag your file here or <button type="button">browse</button></p>
                                <p class="upload-format-wrapper">
                                    File format JPEG, PNG
                                    <span class="d-block">PDF Size 5mb max</span>
                                </p>
                                <input type="file" id="cacCertificateFileUpload" name="cac_certificate" hidden>
                            </div>
                            <p class="text-center" id="stat4"></p>
                        </div>
                    </section>
                    <section class="col-12 col-md-10 col-lg-8 action text-center mt-4">
                        <button type="button" class="btn w-100 btn-primary" onclick="goToNextTab()">Continue</button>
                    </section>
                </div>
                <div id="financialDetails" class="tab-item row flex-column align-content-center">
                    <section class="col-lg-4 col-md-5 col-sm-7">
                        <div class="form-group">
                            <label for="bankName">Bank name</label>
                            <input type="text" value="{{$user->bank_name}}" class="form-control" id="bankName" name="bank_name">
                        </div>
                        <div class="form-group">
                            <label for="accountName">Bank account name</label>
                            <input type="text" value="{{$user->bank_account_name}}" class="form-control" id="accountName" name="bank_account_name">
                        </div>
                        <div class="form-group">
                            <label for="accountNumber">Bank account number</label>
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
                    <section class="col-12 col-md-5 col-lg-4 col-sm-7 action text-center mt-4">
                        <button type="submit" class="btn w-100 btn-primary">Submit</button>
                    </section>
                </div>
            </form>
        </section>
    </div>
</main>
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script>
    var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
</script>
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
{{-- Bussiness --}}
<script>
    $(document).on('change','#bcountryId',function(){
        var country = $("#bcountryId").val();
        $("#bstateId").html("");
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

            $("#bstateId").html(option);
        });
    });



    $(document).on('change','#bstateId',function(){
        var state = $("#bstateId").val();
        $("#bcityId").html("");
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

            $("#bcityId").html(option);
        });
    });
</script>

@endsection
