@extends('layouts.app')

@section('content')

@include('pages.aside')

<main class="main">
    <section class="loan-view-title-bar page-title-bar d-flex flex-wrap justify-content-between">
        <h4 class="page-title font-weight-bold">
            <i class="fa fa-navicon pr-2 d-lg-none" style="cursor:pointer" onclick="openNav()"></i> Loans
        </h4>
    </section>

    <section class="go-back-group d-flex justify-content-between">
        <h6 class="go-back font-weight-bold text-primary">
            <i class="fa fa-long-arrow-left pr-2"></i> Back
        </h6>
    </section>


    <div class="row no-gutters" id="loanView">
        <section class="col-md-5 col-sm-6 mr-md-3">
            @php $megar=$loan @endphp
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-1">Reason</p>
                    <h6 class=" card-text text-primary mb-0">{{$megar->reason}}</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-1">Loan Terms</p>
                    <h6 class="card-text mb-0">{{$megar->loan_tenor}}</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-1">Payback Date</p>
                    <ul class="card-text mb-0 ml-4">
                        <li>{{$megar->payback_date}}</li>
                    </ul>
                </div>
            </div>
            @if(!is_null($megar->lpofile))
            <div class="card loan-status-container">
                <div class="card-body">
                    <p class="card-title mb-1">LPO</p>
                    <div style="width:130px !important; height: 100px !important;">
                        <img src="{{$megar->lpofile}}" class="img-fluid">
                    </div>
                </div>
            </div>
            @endif
        </section>
        <section class="col-md-5 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-1">Amount</p>
                    <h6 class=" card-text mb-0" style="color: #262626;">₦{{number_format($megar->amount)}}</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-1">Interest</p>
                    <h6 class="card-text mb-0">{{$megar->interest}}%</h6>
                </div>
            </div>
            <div class="card loan-status-container">
                <div class="card-body">
                    <p class="card-title mb-1">Status</p>
                    <!-- YOU CAN ONLY HAVE ONE "CARD-TEXT" OR "H6" HERE PER PAGE -->
                    <!-- THIS IS BECAUSE, A LOAN CAN ONLY HAVE ONE STATE (PENDING OR APPROVED) -->
                    <h6 class="card-text mb-0 text-success">{{$megar->status}}</h6>
                </div>
            </div>
            @if(!is_null($megar->proformafile))
            <div class="card loan-status-container">
                <div class="card-body">
                    <p class="card-title mb-1">proforma</p>
                    <div style="width:130px !important; height: 100px !important;">
                        <img src="{{$megar->proformafile}}" class="img-fluid">
                    </div>
                </div>
            </div>
            @endif
        </section>
    </div>
    @if($megar->acknowledge_active_page==1)
    <section class="col-md-5 col-sm-6 view-offer-letter-container">
        <a href="{{ url('/offerletter',$megar->id) }}" class="btn btn-block btn-secondary">View offer letter</a>
    </section>
    @endif
</main>
@endsection
