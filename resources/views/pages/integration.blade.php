@extends('layouts.app')
@section('title', '|| Integration')
@section('content')

@include('pages.aside')

<main class="main">
    <section class="page-title-bar d-flex flex-column justify-content-between">
        <h4 class="page-title font-weight-bold">
            <i class="fa fa-navicon pr-2 d-lg-none" style="cursor:pointer" onclick="openNav()"></i> Integrations
        </h4>

        <p class="integration-page-sub-heading mb-0">
            Setting up integration platform
        </p>
    </section>
    @if(Session::has('failed'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">
                x
            </button>
            <strong>
                {!! session('failed') !!}
            </strong>
        </div>
    @elseif(Session::has('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">
                x
            </button>
            <strong>
                {!! session('success') !!}
            </strong>
        </div>
    @endif
    <input type="hidden" id="status" value="">
    <section class="row mt-4">
        <div class="col-md-4 col-sm-6 mt-2 mt-sm-0 integration-item {{isset($data['collect'])&&$data['collect']==1?'connected':'unconnected'}} ">
            <div class="card h-100">
                <div class="card-body text-center">
                    @if(isset($data['collect'])&&$data['collect'])
                        <span class="unlink">
                            <i class="fa fa-unlink"
                                data-toggle="modal" data-target="#unlinkModal" data-backdrop="false"></i>
                        </span>
                    @endif
                    <div class="brand-logo-container collect-africa">
                        <p class="mb-0">Collect</p>
                    </div>
                    <h6 class="card-title font-weight-bold mt-3">Collect Africa</h6>

                    @if(isset($data['is_reusable'])&&$data['is_reusable'] )
                        <p class="card-text brand-description">
                            Collect Direct Debit payments from your customers, even for one-off or variable amounts.
                        </p>
                    @else
                        <p class="card-text brand-description">
                            This bank doesn't support recurring direct debit payment, please unlink and and connect another!
                        </p>
                    @endif
                </div>
                <div class="card-footer">
                    {{-- <a class="nav-link" href="{{route('payment')}}"> --}}
                        @if(isset($data['collect'])&&$data['collect']&&isset($data['collect'])&&$data['collect'])
                            <button class="btn btn-block">Connected</button>
                        @else
                            <button
                            class="btn btn-block"
                            data-toggle="modal"
                            data-target="#addCollectModel"
                            type="button">Connect</button>
                        @endif
                    {{-- </a> --}}

                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mt-2 mt-sm-0 integration-item unconnected">
            <div class="card h-100">
                <div class="card-body text-center">
                    <div class="brand-logo-container">
                        <img src="../../images/icons8-card-wallet-64.png" class="mb-1" alt="Wallet Icon">
                    </div>
                    <h6 class="card-title font-weight-bold mt-3">Debit Card</h6>
                    <p class="card-text brand-description mb-auto">
                        Ammet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                    </p>
                </div>
                <div class="card-footer">
                    <button
                        class="btn btn-block"
                        data-toggle="modal"
                        data-target="#addDebitCardModel"
                        type="button">
                        Connect
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Alert Modal -->
    <div class="modal fade alert" id="unlinkModal">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body text-center">
                    <span class="fa fa-times-circle closebtn" data-dismiss="modal"></span>
                    <h5 class="modal-title font-weight-bold mb-2">
                        Unlink Collect Africa?
                    </h5>
                    <p>
                        Are you sure you want to unlink Collect Africa?
                    </p>
                    <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary ml-1" onclick="window.location.href ='/integration/unlink'">Unlink</button>
                </div>
            </div>
        </div>
    </div>
<!-- Add Debit Card Modal -->
<div class="modal fade alert" id="addCollectModel">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body">
                <span class="fa fa-times-circle closebtn" data-dismiss="modal"></span>
                <h5 class="modal-title font-weight-bold mb-2">
                    Connect Collect Africa
                </h5>
                <p class="mb-2 ml-2 mr-0 p-0 ">You will be charged 100 NGN for connecting securely.</p>
                <form action="#">
                    <div class="form-group">
                        <label for="cardNumber">Your Mail Address</label>
                        <input type="email" class="form-control" id="email" value="{{auth()->user()->email}}" name="email">
                    </div>
                    {{-- <a class="nav-link" href="{{route('payment')}}"> --}}
                        <button type="button" data-dismiss="modal" onclick="connectCollect()" class="btn btn-block btn-primary ml-1">Connect
                        </button>
                    {{-- </a> --}}

                </form>
            </div>
        </div>
    </div>
</div>
    <!-- Add Debit Card Modal -->
    <div class="modal fade alert" id="addDebitCardModel">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body">
                    <span class="fa fa-times-circle closebtn" data-dismiss="modal"></span>
                    <h5 class="modal-title font-weight-bold mb-2">
                        Add debit card
                    </h5>
                    <form action="#">
                        <div class="form-group">
                            <label for="cardNumber">Card Number</label>
                            <input type="text" class="form-control" id="cardNumber" name="cardNumber">
                        </div>
                        <div class="form-row form-group">
                            <div class="col-sm-6">
                                <label for="expiryDate">Expiry Date</label>
                                <input type="date" class="form-control" id="expiryDate" name="expiryDate">
                            </div>

                            <div class="col-sm-6">
                                <label for="cvv">CVV</label>
                                <input type="text" class="form-control" id="cvv" name="cvv">
                            </div>
                        </div>
                        <button type="button" data-dismiss="modal" class="btn btn-block btn-primary ml-1">Save</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@section('script')
<script src="https://cdn.collect.africa/collect-widget.js"></script>
<script>
  connectCollect =()=>{
    var email = document.getElementById('email').value;
    var firstName = "{{auth()->user()->first_name}}";
    var lastName = "{{auth()->user()->last_name}}";
    var id = "{{auth()->id()}}";
    var key = "{{config('collect.public_key')}}";
    const CollectCheckoutService = window.CollectCheckout;
    const checkout = new CollectCheckoutService({
        email: email,
        firstName: firstName,
        lastName: lastName,
        reference: id+'-'+uuidv4(),
        amount: 10000,
        currency: "NGN",
        publicKey: key,
        onSuccess(e) {
            console.log("success callback.", e);
            document.getElementById('status').value="success";
        },
        onClose(e) {
            console.log("closed the widget.", e);
            if(document.getElementById('status').value==="success")
            {
                window.location.href ="/integration/success";
            }
        },
        onError(e){
            document.getElementById('status').value = "failed";
            console.log("error: ", e);
        }
    });
    checkout.setup();
    checkout.open();
  }
  function uuidv4() {
  return 'xxxxxxxx-xxxx-4xxx-yxxx'.replace(/[xy]/g, function(c) {
    var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
    return v.toString(16);
  });
}

</script>
@endsection

