@extends('layouts.app')

@section('content')

@include('pages.aside')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<main class="main">
    <section class="page-title-bar d-flex flex-wrap justify-content-between">
        <h4 class="page-title font-weight-bold">
            <i class="fa fa-navicon pr-2 d-lg-none" style="cursor:pointer" onclick="openNav()"></i> Guarantors
        </h4>
    </section>
    @if(Session::has('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">
            x
        </button>
        <strong>
          {!! session('success')!!}   @php Session::forget('success') @endphp &nbsp;&nbsp;
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
    </div>
    @endif
    <h6 class="go-back font-weight-bold text-primary">
        <i class="fa fa-long-arrow-left pr-2"></i> Back
    </h6>

    <h4 class="page-sub-title font-weight-bold">
        Add new Guarantor
    </h4>
    <div class="container ext_con">
    <form class="row trade-lender-form mt-4" class="was-validated" action="{{ url('/createguarantor/guarant') }}" method="post" autocomplete="off" style="background-color: white; border-radius: 8px; margin-bottom: 10px; padding-top: 10px;">
        @csrf
        <section class="col-md-6 col-sm-6">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" placeholder="Mr./Mrs./Miss./Prof./" id="title" name="title" required>
            </div>
            <div class="valid-feedback">Valid.</div>
               <div class="invalid-feedback">Please fill out this field.</div>
            <div class="form-row form-group">
                <div class="col-sm-6">
                    <label for="fName">First name</label>
                    <input type="text" class="form-control" id="fName" name="fName" required>
                </div>

                <div class="col-sm-6">
                    <label for="lName">Last name</label>
                    <input type="text" class="form-control" id="lName" name="lName"required>
                </div>
            </div>
            <div class="form-group">
                <label for="DOB">Date of birth</label>
                <input type="date" class="form-control" id="DOB" name="DOB" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value=""></option>
                    <option value="Male" @if ("Male") selected
                        @endif>Male</option>
                    <option value="Female" @if ("Female") selected
                        @endif>Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="emailAddress">Email Address</label>
                <input type="email" class="form-control" id="emailAddress" name="gemail" required>
            </div>
            <div class="form-group">
                <label for="bvn">BVN (Bank Verification Number)</label>
                <input type="text" class="form-control" id="bvn" name="bvn" required>
            </div>
        </section>
        <section class="col-md-6 col-sm-6">
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <select name="country"
                 class="form-control countries order-alpha include-AF-AL-DZ-BE-BO-CM-CV-GM-KE-MG-NG-TG-UG-ZW" id="countryId"
                 required><option value="">Select Country</option>
                @foreach(App\Country::all() as $country)
                    <option value="{{$country->id}}">{{$country->name}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-6">
                    <label for="State">State</label>
                    <select name="state" class="form-control states order-alpha" id="stateId" required>
                        <option value="">Select State</option>
                    </select>
                </div>

                <div class="col-sm-6">
                    <label for="LGA">LGA</label>
                    <select name="city" class="form-control cities order-alpha" id="cityId" required>
                        <option value="">Select City</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="occupation">Occupation</label>
                <input type="text" class="form-control" id="occupation" name="occupation" required>
            </div>
            <div class="form-group">
                <label for="companyRole">Role in Company</label>
                <input type="text" class="form-control" id="companyRole" name="wic" required>
            </div>
            <div class="form-group">
                <label for="coy_name">Employer/Company name</label>
                <input type="text" class="form-control" id="coy_name" name="coy_name" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phoneno" name="phoneno" required>
            </div>
        </section>
        <div class="container ext_con">
            <div class="row form">
                <section class="col-lg-12 col-md-10 col-sm-12 col-xs-12 action text-center mt-4">
                    <button type="reset" class="btn btn-secondary mr-1">Cancel</button>
                    <button type="submit" class="btn btn-primary ml-1">Save</button>
                </section>
            </div>
        </div>
    </form>
    </div>
    
</main>

<script src="{{ asset('js/jquery.min.js')}}"></script>
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
   
@endsection
