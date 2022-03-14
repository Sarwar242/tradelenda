@extends('layouts.app')
@section('title', 'Loan Request')
@section('content')

@include('pages.aside')

<main class="main">
    <section class="page-title-bar d-flex flex-wrap justify-content-between">
        <h4 class="page-title font-weight-bold">
            <i class="fa fa-navicon pr-2 d-lg-none" style="cursor:pointer" onclick="openNav()"></i> Loans
        </h4>
    </section>

    <h6 class="go-back font-weight-bold text-primary">
        <i class="fa fa-long-arrow-left pr-2"></i> Back
    </h6>

    <h4 class="page-sub-title font-weight-bold">
        Request new loan
    </h4>
    <form id="createLoan" class="row trade-lender-form mt-4" action="{{ url('/request/loan') }}" method="post" autocomplete="off">
        @csrf
        <section class="col-md-5 col-sm-6">
            <div class="form-group">
                <label for="title">How much do you need?</label>
                <input type="text" class="form-control" placeholder="Enter the amount" id="amount" name="amount" required>
            </div>

            <div class="form-group">
                <label for="loanDuration">Loan Duration</label>
                <select class="form-control" name="loan_tenor" id="loanDuration" required>
                    <option value=""></option>
                    <option value="30 days">30 days</option>
                    <option value="60 days">60 days</option>
                    <option value="90 days">90 days</option>
                    <option value="180 days">180 days</option>
                </select>
            </div>
            <div class="form-group">
                <label for="loanFor">What do you need it for</label>
                <select class="form-control" name="reason" id="loanFor" required>
                    <option value=""></option>
                    <option value="Working Capitals">Working Capitals</option>
                    <option value="LPO">LPO</option>
                    <option value="Pay a Supplier">Pay a Supplier</option>
                    <option value="Pay Salary">Pay Salary</option>
                    <option value="Expand My Business">Expand My Business</option>
                    <option value="Purchase Inventory">Purchase Inventory</option>
                    <option value="Purchase Equipment">Purchase Equipment</option>
                </select>
            </div>
            <div class="form-group loan-desc-container d-none">
                <label for="note">Reason</label>
                <textarea class="form-control" name="note" id="note" rows="5"></textarea>
            </div>

            <div class="form-group lpo-container d-none">
                <label for="cac7">Upload Local Purchasing Order(LPO)</label>
                <div class="drag-area bg-white">
                    <div class="icon"><i class="fa fa-cloud-upload"></i></div>
                    <p>Drag your file here or <button type="button">browse</button></p>
                    <p class="upload-format-wrapper">
                        File format JPEG, PNG, PDF
                        <span class="d-block">Size 5mb max</span>
                    </p>
                    <input type="file" id="lpoFileUpload" name="lpoFileUpload" hidden>
                </div>
            </div>
        </section>
        <section class="col-md-5 col-sm-6">
            <div class="form-group proforma-container d-none mb-3 mb-sm-5">
                <label for="cac7">Upload Proforma Invoice</label>
                <div class="drag-area bg-white">
                    <div class="icon"><i class="fa fa-cloud-upload"></i></div>
                    <p>Drag your file here or <button type="button">browse</button></p>
                    <p class="upload-format-wrapper">
                        File format JPEG, PNG, PDF
                        <span class="d-block">Size 5mb max</span>
                    </p>
                    <input type="file" id="proformaFileUpload" name="proformaFileUpload" hidden >
                </div>
            </div>
            <div class="loan-eligibility-block">
                <div class="icon-block">
                    <img src="https://res.cloudinary.com/trade-lenda/image/upload/v1624866357/icons/Discount_z9cvvp.png"
                        class="mb-1" height="54" width="54" alt="Loan Eligibility Icon">
                </div>
                <h6 class="font-weight-bold">Loan Offer</h6>
                <p class="text-wrapper">
                    You are eligible for a loan of about
                    <span class="d-block text-center">₦0</span>
                </p>
            </div>
        </section>
        <section class="col-12 col-md-5 col-sm-6 action text-center mt-4">
            <button type="submit" class="btn btn-block btn-primary py-3">Submit</button>
        </section>
        <section class="col-12 col-md-5 col-sm-6 action text-center mt-4">
            <h4 id="status"></h4>
        </section>
        <div class="loan-eligibility-block-small-screen">
            <div class="icon-block">
                <img src="https://res.cloudinary.com/trade-lenda/image/upload/v1624866357/icons/Discount_z9cvvp.png" class="mb-1" height="54" width="54"
                    alt="Loan Eligibility Icon">
            </div>
            <h6 class="font-weight-bold">Loan Offer</h6>
            <p class="text-wrapper">
                You are eligible for a loan of about
                <span class="d-block text-center">₦0</span>
            </p>
        </div>
    </form>


</main>

<script src="{{ asset('js/jquery.min.js')}}"></script>
<script type="text/javascript">
var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

    $(document).ready(function (e) {
        var lpoFile;
        $('#lpoFileUpload').on('change',function(){
            lpoFile = $('#lpoFileUpload')[0].files;
            // console.log(lpoFile);
        });
        var proformaFile;
        $('#proformaFileUpload').on('change',function(){
            proformaFile = $('#proformaFileUpload')[0].files;
            // console.log(proformaFile);
        });
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $('#createLoan').submit(function(e) {
        e.preventDefault();

        var amount = $('#amount').val();
        var reason = $('#loanFor').val();
        var loan_tenor = $('#loanDuration').val();
        // var interest = $('#interest').val();
        var note = $('#note').val();

        var fd = new FormData();
        fd.append('_token',CSRF_TOKEN);
        fd.append('amount',amount);
        fd.append('reason',reason);
        fd.append('loan_tenor',loan_tenor);
        fd.append('note',note);

        if(typeof(proformaFile) !== "undefined" && proformaFile.length > 0){
            fd.append('proforma',proformaFile[0]);
        }
        if(typeof(lpoFile) !== "undefined" && lpoFile.length > 0){
            fd.append('lpo',lpoFile[0]);
        }

    $.ajax({
        type:'POST',
        url: "{{ route('newloanrequest.post')}}",//
        method: 'post',
        data: fd,
        cache:false,
        contentType: false,
        processData: false,
        dataType: 'json',
        beforeSend: function(){
            // Show image container
            $("#status").text('Your loan request is in process! Please wait');
        },
        success: (data) => {
            console.log(data);
            this.reset();
            alert('Loan request added successfully');
            window.location.href ="/loans";
            },
        error: function(data){
            console.log(data);
        }
    });
    });
    });
    </script>
@endsection
