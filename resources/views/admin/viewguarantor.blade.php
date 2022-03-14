@extends('admin.layouts.master')
@section('title','Users Page')

@section('contents')
@include('admin.layouts.sidebar')
<main class="main">
    <section class="page-title-bar d-flex flex-wrap justify-content-between">
        <h4 class="page-title font-weight-bold">
            <i class="fa fa-navicon pr-2 d-lg-none" style="cursor:pointer" onclick="openNav()"></i> Guarantor
        </h4>
    </section>

    <section class="go-back-group d-flex justify-content-between">
        <h6 class="go-back font-weight-bold text-primary">
            <i class="fa fa-long-arrow-left pr-2"></i> Back
        </h6>
        <i class="fa fa-ellipsis-v text-primary"></i>
    </section>
    <div class="row no-gutters" id="guarantorView">
        <section class="col-md-5 col-sm-6 mr-md-3">
            @php $memba=$gdata @endphp
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-1">Title</p>
                    <h6 class=" card-text font-weight-bold mb-0">{{$memba->title}}</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-1">Full name</p>
                    <h6 class="card-text font-weight-bold mb-0">{{$memba->first_name}} {{$memba->last_name}}</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-1">Date of birth</p>
                    <h6 class="card-text font-weight-bold mb-0">{{$memba->dob}}</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-1">Email address</p>
                    <h6 class="card-text font-weight-bold mb-0">{{$memba->gemail}}</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-1">Address</p>
                    <h6 class="card-text font-weight-bold mb-0">{{$memba->address}}</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-1">State</p>
                    <h6 class="card-text font-weight-bold mb-0">{{$memba->state}}</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-1">Occupation</p>
                    <h6 class="card-text font-weight-bold mb-0">{{$memba->occupation}}</h6>
                </div>
            </div>
        </section>
        <section class="col-md-5 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-1">Gender</p>
                    <h6 class=" card-text font-weight-bold mb-0">Male</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-1">BVN (Bank Verification Number)</p>
                    <h6 class="card-text font-weight-bold mb-0">{{$memba->bvn}}</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-1">Country</p>
                    <h6 class="card-text font-weight-bold mb-0">{{$memba->country}}</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-1">LGA</p>
                    <h6 class="card-text font-weight-bold mb-0">{{$memba->lga}}</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-1">Employer/Company name</p>
                    <h6 class="card-text font-weight-bold mb-0">{{$memba->coy_name}}</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-1">Role in company</p>
                    <h6 class="card-text font-weight-bold mb-0">{{$memba->wic}}</h6>
                </div>
            </div>
        </section>
    </div>

</main>

@endsection
