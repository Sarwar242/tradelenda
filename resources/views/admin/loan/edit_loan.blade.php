@extends('admin.layouts.master')
@section('title','Update Loan')

@section('contents')
@include('admin.layouts.sidebar')
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.circular {
    height: 100px;
    width: 100px;
    position: relative;
}

.circular .inner,
.circular .outer,
.circular .circle {
    position: absolute;
    z-index: 6;
    height: 100%;
    width: 100%;
    border-radius: 100%;
    box-shadow: inset 0 1px 0 rgba(0, 0, 0, 0.2);
}

.circular .inner {
    top: 50%;
    left: 50%;
    height: 80px;
    width: 80px;
    margin: -40px 0 0 -40px;
    background-color: #dde6f0;
    border-radius: 100%;
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
}

.circular .circle {
    z-index: 1;
    box-shadow: none;
}

.circular .numb {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 10;
    font-size: 18px;
    font-weight: 500;
    color: #4158d0;
}

.circular .bar {
    position: absolute;
    height: 100%;
    width: 100%;
    background: #fff;
    -webkit-border-radius: 100%;
    clip: rect(0px, 100px, 100px, 50px);
}

.circle .bar .progress {
    position: absolute;
    height: 100%;
    width: 100%;
    -webkit-border-radius: 100%;
    clip: rect(0px, 50px, 100px, 0px);
}

.circle .bar .progress,
.dot span {
    background: #4158d0;
}

.circle .left .progress {
    z-index: 1;
    animation: left 4s linear both;
}

@keyframes left {
    100% {
        transform: rotate({{ $degree>180? '180': $degree }}deg);
    }
}

.circle .right {
    z-index: 3;
    transform: rotate(180deg);
}

.circle .right .progress {
    animation: right 4s linear both;
    animation-delay: 4s;
}

@keyframes right {
    100% {
        transform: rotate({{ $degree<=180? 0: $degree-180 }}deg);
    }
}

.circle .dot {
    z-index: 2;
    position: absolute;
    left: 50%;
    top: 50%;
    width: 50%;
    height: 10px;
    margin-top: -5px;
    animation: dot 8s linear both;
    transform-origin: 0% 50%;
}

.circle .dot span {
    position: absolute;
    right: 0;
    width: 10px;
    height: 10px;
    border-radius: 100%;
}

@keyframes dot {
    0% {
        transform: rotate(-90deg);
    }
    50% {
        transform: rotate(90deg);
        z-index: 4;
    }
    100% {
        transform: rotate(270deg);
        z-index: 4;
    }
}
</style>
<main class="main">
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
  </div>

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
          <div class="card">
              <div class="card-body">
                  <p class="card-title mb-1">Name</p>
                  <h6 class=" card-text text-primary mb-0">{{$loan->user? $loan->user->first_name:''}} {{$loan->user? $loan->user->last_name:''}}</h6>
              </div>
          </div>
          <div class="card">
              <div class="card-body">
                  <p class="card-title mb-1">Loan Tenor</p>
                  <h6 class="card-text mb-0">monthly</h6>
              </div>
          </div>
          <div class="card">
              <div class="card-body">
                  <p class="card-title mb-1">Repayment Plan</p>
                  <ul class="card-text mb-0 ml-4">
                      <li>Collect</li>
                  </ul>
              </div>
          </div>
          <div class="card loan-status-container">
              <div class="card-body">
                  <p class="card-title mb-1">Reason</p>
                  <h6 class="card-text mb-0">{{$loan->reason}}</h6>
              </div>
          </div>
          @if(empty($loan->note))
          <div class="card loan-status-container">
            <div class="card-body">
                <p class="card-title mb-1">Note</p>
                <h6 class="card-text mb-0">No action taken yet</h6>
            </div>
        </div>
        @else
        <div class="card loan-status-container">
          <div class="card-body">
              <p class="card-title mb-1">Note</p>
              <h6 class="card-text mb-0">{{$loan->note}}</h6>
          </div>
      </div>
      @endif
      </section>
      <section class="col-md-5 col-sm-6">
          <div class="card">
              <div class="card-body">
                  <p class="card-title mb-1">Amount</p>
                  <h6 class=" card-text mb-0" style="color: #262626;">₦{{number_format($loan->amount)}}</h6>
              </div>
          </div>
          <div class="card">
              <div class="card-body">
                  <p class="card-title mb-1">Interest</p>
                  <h6 class="card-text mb-0">{{$loan->interest}}%</h6>
              </div>
          </div>
          <div class="card loan-status-container">
              <div class="card-body">
                  <p class="card-title mb-1">Status</p>
                  <!-- YOU CAN ONLY HAVE ONE "CARD-TEXT" OR "H6" HERE PER PAGE -->
                  <!-- THIS IS BECAUSE, A LOAN CAN ONLY HAVE ONE STATE (PENDING OR APPROVED) -->
                  <h6 class="card-text mb-0 text-success">{{ucwords($loan->status)}}</h6>
              </div>
          </div>
          <div class="card">
            <div class="card-body">
                <p class="card-title mb-1">Paid</p>
                <h6 class="card-text mb-0">₦{{!is_null($loan->payments->sum('amount'))?$loan->payments->sum('amount'):0}}</h6>
            </div>
        </div>
        <div class="card">
          <div class="card-body">
              <p class="card-title mb-1">Credit score</p>
              <input type="hidden" name="scr" id="scr" value="{{ $score }}">
              <div class="circular">
                <div class="inner"></div>
                <div class="outer"></div>
                <div class="numb">
                    0%
                </div>
                <div class="circle">
                    <div class="dot">
                        <span></span>
                    </div>
                    <div class="bar left">
                        <div class="progress"></div>
                    </div>
                    <div class="bar right">
                        <div class="progress"></div>
                    </div>
                </div>
            </div>
          </div>
      </div>
      </section>
  </div>
<br>
    @if ($loan->status=='pending')
        <a href="#" data-toggle="modal" data-target="#alertModaldecline"data-backdrop="static" class="btn btn-outline-danger ml-3">Decline</a>
        <a href="#" data-toggle="modal" data-target="#alertModalapprove"data-backdrop="static" class="btn btn-outline-success ml-3">Approve</a>

    @elseif($loan->status=='declined')
        <a href="#" data-toggle="modal" data-target="#alertModaldecline"data-backdrop="static" class="btn btn-outline-danger ml-3">Decline</a>
        <a href="#" data-toggle="modal" data-target="#alertModalapprove"data-backdrop="static" class="btn btn-outline-success ml-3">Approve</a>

        @elseif($loan->status=='approved')
        <a href="#" data-toggle="modal" data-target="#alertModaldecline"data-backdrop="static" class="btn btn-outline-danger ml-3">Decline</a>
        <br><br>
        <section class="col-md-5 col-sm-6 view-offer-letter-container">
          @if($loan->acknowledge_active_page==0)
              <a href="{{ url('admin/loan/sendoffer', $loan->id) }}" class="btn btn-block btn-primary active">Send offer letter</a>
          @elseif($loan->acknowledge_active_page==1)
              <a href="{{ url('admin/loan/viewoffer', $loan->id) }}" class="btn btn-block btn-secondary active">View offer letter</a>
          @endif


</section>
<br>
        @if($loan->acknowledgement)
            <a href="#" data-toggle="modal" data-target="#alertModaldisbursed"data-backdrop="static" class="btn btn-outline btn-primary ml-3">Disburse</a>
        @endif
    @elseif($loan->status=='disbursed')
        <a href="#" data-toggle="modal" data-target="#alertModaldecline"data-backdrop="static" class="btn btn-outline-danger ml-3">Decline</a>
    @endif

    @if(!is_null($user_payment_method))
        <a href="#" data-toggle="modal" data-target="#alertModalCharge"data-backdrop="static" class="btn btn-outline-warning ml-3">Charge</a>
    @endif
    <br>
    <br>
    <br>
  {{-- <form  method="POST" action="{{ route('admin.loan.update.submit', $loan->id) }}" enctype="multipart/form-data" novalidate="novalidate">
    @csrf
      <a href="#" data-toggle="modal" data-target="#alertModaldecline"data-backdrop="static" class="btn btn-outline-danger ml-3">Decline</a>

    </form> --}}

<!-- The Modal Approve-->
<div class="modal fade alert" id="alertModalapprove">
  <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
          <!-- Modal body -->
          <div class="modal-body text-center">
              <span class="fa fa-times-circle closebtn" data-dismiss="modal"></span>
              <h5 class="modal-title font-weight-bold mb-2">
                Approve loan?
              </h5>
              <form  method="POST" action="{{ route('admin.loan.status.update', $loan->id) }}" enctype="multipart/form-data" novalidate="novalidate">
                @csrf
              <div class="form-group">
                <textarea  type="text" name="note"  placeholder="Comment" id="exampleFormControlTextarea1" rows="3" class="form-control @error('note') is-invalid @enderror">{{$loan->note}}</textarea>
                @error('note')
                <div class="alert alert-danger alert-block">
                  <button type="button" class="close" data-dismiss="alert">
                    x
                  </button>
                  <strong>
                      {!! $message !!}
                  </strong>
                </div>
                @enderror
              </div>
              <input type="hidden" name="status" value="approved">
              <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cancel</button>
              <input type="submit" class="btn btn-primary ml-1" value="Submit">
              </form>

          </div>
      </div>
  </div>
</div>

<!-- The Modal Approve-->
<div class="modal fade alert" id="alertModaldisbursed">
  <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
          <!-- Modal body -->
          <div class="modal-body text-center">
              <span class="fa fa-times-circle closebtn" data-dismiss="modal"></span>
              <h5 class="modal-title font-weight-bold mb-2">
                Disburse loan?
              </h5>
              <form  method="POST" action="{{ route('admin.loan.status.update', $loan->id) }}" enctype="multipart/form-data" novalidate="novalidate">
                @csrf
              <div class="form-group">
                <textarea  type="text" name="note" placeholder="Comment" id="exampleFormControlTextarea1" rows="3" class="form-control @error('note') is-invalid @enderror">{{$loan->note}}</textarea>
                @error('note')
                <div class="alert alert-danger alert-block">
                  <button type="button" class="close" data-dismiss="alert">
                    x
                  </button>
                  <strong>
                      {!! $message !!}
                  </strong>
                </div>
                @enderror
              </div>
              <input type="hidden" name="status" value="disbursed">
              <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cancel</button>
              <input type="submit" class="btn btn-primary ml-1" value="Submit">
              </form>

          </div>
      </div>
  </div>
</div>

<!-- The Modal Decline -->
<div class="modal fade alert" id="alertModaldecline">
  <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
          <!-- Modal body -->
          <div class="modal-body text-center">
              <span class="fa fa-times-circle closebtn" data-dismiss="modal"></span>
              <h5 class="modal-title font-weight-bold mb-2">
                Decline loan?
              </h5>
              <form  method="POST" action="{{ route('admin.loan.status.update', $loan->id) }}" enctype="multipart/form-data" novalidate="novalidate">
                @csrf
              <div class="form-group">
                <textarea  type="text" name="note" placeholder="Enter a Note" rows="3" class="form-control @error('note') is-invalid @enderror">{{$loan->note}}</textarea>
                @error('note')
                <div class="alert alert-danger alert-block">
                  <button type="button" class="close" data-dismiss="alert">
                    x
                  </button>
                  <strong>
                      {!! $message !!}
                  </strong>
                </div>
                @enderror
              </div>
              <input type="hidden" name="status" value="declined">
              <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cancel</button>
              <input type="submit" class="btn btn-primary ml-1" value="Submit">
              </form>

          </div>
      </div>
  </div>
</div>
<!-- The Modal Charge -->
<div class="modal fade alert" id="alertModalCharge">
  <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
          <!-- Modal body -->
          <div class="modal-body text-center">
              <span class="fa fa-times-circle closebtn" data-dismiss="modal"></span>
              <h5 class="modal-title font-weight-bold mb-2">
                Charge loan?
              </h5>
              <form  method="POST" action="{{ route('admin.loan.charge', $loan->id) }}" enctype="multipart/form-data" novalidate="novalidate">
                @csrf
                <div class="form-group">
                    <input type="number" name="amount" placeholder="Enter an amount" rows="3" class="form-control @error('amount') is-invalid @enderror">
                    @error('amount')
                    <div class="alert alert-danger alert-block">
                      <button type="button" class="close" data-dismiss="alert">
                        x
                      </button>
                      <strong>
                          {!! $message !!}
                      </strong>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <textarea type="text" name="description" placeholder="Enter a description" rows="3" class="form-control @error('description') is-invalid @enderror"></textarea>
                    @error('description')
                    <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">
                        x
                    </button>
                    <strong>
                        {!! $message !!}
                    </strong>
                    </div>
                    @enderror
                </div>
                <input type="hidden" name="user_id" value="{{$loan->user_id}}">
                <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-primary ml-1" value="Submit">
              </form>

          </div>
      </div>
  </div>
</div>
<form>
</main>

<script>
    const numb = document.querySelector(".numb");
    const score = document.querySelector("#scr").value;
    let counter = 0;
    setInterval(() => {
        if (counter == score) {
            clearInterval();
        } else {
            counter += 1;
            numb.textContent = counter + "%";
        }
    }, 73);
</script>
@endsection
