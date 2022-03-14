@extends('admin.layouts.master')
@section('title','Payments')

@section('contents')
@include('admin.layouts.sidebar')

<main class="main">

    <section class="page-title-bar d-flex flex-wrap justify-content-between mb-3">
        <h4 class="page-title font-weight-bold">
            <i class="fa fa-navicon pr-2 d-lg-none" style="cursor:pointer" onclick="openNav()"></i> Payments
        </h4>
    </section>

    <section class="row mt-3">
        <div class="col-md-4 col-sm-6 search-group">
            {{-- <input class="form-control py-2" type="search" placeholder="search" id="search">
            <span class="fa fa-search"></span> --}}
        </div>
    </section>

    <section class="table-responsive-lg mt-3">
        <table id="dataTable" class="table">
            <thead class="thead-light">
                <tr>
                    <th>USER_NAME</th>
                    <th>LOAN</th>
                    <th>AMOUNT</th>
                    <th>REFERENCE</th>
                    <th width="12%">STATUS</th>
                    <th>PAYMENT METHOD</th>
                    <th>CHARGED_AT</th>
                    <th>TYPE</th>
                </tr>
            </thead>

            <tbody class="bg-white">
                @foreach($payments as $payment)
                <tr>
                    <td><img src="{{$payment->user->user_image}}" alt="" style="width: 40px;height: 40px;border-radius: 50px;"> {{$payment->user->first_name}} {{$payment->user->last_name}}</td>
                    <td>{{$payment->loan? '#'.$payment->loan->id : 'NA'}}</td>
                    <td>{{$payment->amount}}</td>
                    <td>{{$payment->reference}}</td>
                    <td><span id="status-{{$payment->cpid}}"> {{$payment->status}}</span>
                        &nbsp;<span data-id="{{$payment->cpid}}" class="recheck" style="cursor:pointer; color:green">
                            <i class="fa fa-refresh" aria-hidden="true">
                            </i>
                        </span>
                    </td>
                    <td>{{$payment->integrate ? $payment->integrate->payment_method: "collect"}}</td>
                    <td>{{$payment->charged_at->format('h:i A d-m-y')}}</td>
                    <td>{{$payment->reason == "admin_charge" ? "Admin Charged": "User Paid"}}</td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </section>

</main>

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.recheck').on('click', function() {
                var recheck = $(this);
                var cpid = recheck.data('id');
                if(cpid)
                    $.get("/admin/payment/recheck/"+cpid,
                        function(data) {
                                $('#status-'+cpid).html(`${data}`);
                                console.log(data);
                    });
            });
        });
    </script>

@endsection
