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
                <p style="margin-bottom: 0px; font-weight: bold;">Complete Your Business Information</p>
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
            <div class="col-lg-6 col-md-6 col-sm-6 div1">
                <section>
                    <form id="profileUpdateForm" class="profile-update-forms tab-container col-12"  method="POST" action="{{ route('kyc.business.update') }}" novalidate="novalidate" enctype="multipart/form-data">
                        @csrf
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
                        <input type="hidden" id="is_valid_rc" name="is_valid_rc"/>
                        <input type="text" value="{{$user->rc_num}}" oninput="verifyRC(event)" class="form-control" id="rcNumber" name="rc_num">
                        <div id="rcNumberFeedback" class="invalid-feedback">
                            RC Number isn't valid for the Company Name.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="DOBEstablishment">Date of business establishment</label>
                        <input type="date" class="form-control" id="DOBEstablishment" name="establishment_date" value="{{$user->establishment_date}}">
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
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 div2">
                <section>
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
                        <input type="hidden" id="is_valid_tin" name="is_valid_tin"/>
                        <input type="text" value="{{$user->tin}}" oninput="verifyTIN(event)" class="form-control" id="tin" name="tin">
                        <div id="tinInvalid" class="invalid-feedback">
                            TIN Number isn't valid for the Company Name.
                        </div>
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
  <script src="{{ asset('js/jquery.min.js')}}"></script>
<script>
    var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
</script>
<script type="text/JavaScript" src="{{ asset('js/filesupload.js')}}"></script>
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
<script src="{{ asset('js/verify_okra.js')}}"></script>

@endsection
