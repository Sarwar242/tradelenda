
@extends('admin.layouts.master')

@section('title','Admin Dashboard')
@section('contents')

@include('admin.layouts.sidebar')
<main class="main">
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




            <section class="page-title-bar d-flex flex-wrap justify-content-between mb-3">
                <h4 class="page-title font-weight-bold">
                    <i class="fa fa-navicon pr-2 d-lg-none" style="cursor:pointer;" onclick="openNav()"></i> Dashboard
                </h4>
                <div class="actions d-flex flex-wrap ml-auto">
                    <select name="" id="" class="custom-select ml-1">
                            <option value="This Month" selected>This Month</option>
                            <option value="This Year">This Year</option>
                            <option value="Custom Date">Custom Date</option>
                        </select>
                </div>
            </section>

            <section class="row loan-stats justify-content-sm-cefnter justify-content-md-start">
                <div class="col-lg-3 col-md-6 col-sm-6 mt-md-2 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text mb-1">Loan disbursed<img src="https://res.cloudinary.com/trade-lenda/image/upload/v1624946018/icons/Vector_2_lgrjc0.png" style="float:right"></p>
                            <h4 class="card-title font-weight-bold mb-0">{{$data['disbursed']}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt-md-2 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text mb-1">Loan paid back<img src="https://res.cloudinary.com/trade-lenda/image/upload/v1624866378/icons/Vector_1_o7i2li.png" style="float:right"></p>
                            <h4 class="card-title font-weight-bold mb-0">{{$data['disbursed']}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt-md-2 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text mb-1">Active Loan <img src="https://res.cloudinary.com/trade-lenda/image/upload/v1624866378/icons/Vector_1_o7i2li.png" style="float:right"></p>
                            <h4 class="card-title font-weight-bold mb-0">{{$data['active']}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt-md-2 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text mb-1">Past due<img src="https://res.cloudinary.com/trade-lenda/image/upload/v1624946018/icons/Vector_3_eak230.png" style="float:right"></p>
                            <h4 class="card-title font-weight-bold mb-0">{{$data['due']}}</h4>
                        </div>
                    </div>
                </div>
            </section>
            <section class="row loan-stats justify-content-sm-cefnter justify-content-md-start">
                <div class="col-lg-3 col-md-6 col-sm-6 mt-md-2 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text mb-1">Loan amount disbursed<img src="https://res.cloudinary.com/trade-lenda/image/upload/v1624866378/icons/Vector_1_o7i2li.png" style="float:right"></p>
                            <h4 class="card-title font-weight-bold mb-0">₦{{number_format($data['disbursed_amount'])}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt-md-2 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text mb-1">Loan amount paid back<img src="https://res.cloudinary.com/trade-lenda/image/upload/v1624866378/icons/Vector_1_o7i2li.png" style="float:right"></p>
                            <h4 class="card-title font-weight-bold mb-0">₦{{number_format($data['disbursed_amount'])}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt-md-2 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text mb-1">Active loan <img src="https://res.cloudinary.com/trade-lenda/image/upload/v1624866378/icons/Vector_1_o7i2li.png" style="float:right"></p>
                            <h4 class="card-title font-weight-bold mb-0">₦{{number_format($data['active_amount'])}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt-md-2 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text mb-1">Past due<img src="https://res.cloudinary.com/trade-lenda/image/upload/v1624866378/icons/Vector_1_o7i2li.png" style="float:right"></p>
                            <h4 class="card-title font-weight-bold mb-0">₦{{number_format($data['due_amount'])}}</h4>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mt-4">
                <h6 class="page-title font-weight-bold d-inline-block mr-1">
                    Loan Applications
                </h6>
                <button class="btn btn-primary">View All</button>
            </section>

            <!-- GRID SECTION -->
            <section class="table-responsive-lg mt-3 loan-applications">
                <table class="table" id="dataTable">
                    <thead class="thead-light">
                        <tr>
                            <th>NAME</th>
                            <th>AMOUNT</th>
                            {{-- <th>AMOUNT PAID BACK</th> --}}
                            <th>LOAN TENOR</th>
                            <th>INTEREST(%)</th>
                            {{-- <th>INTEREST PAID BACK(%)</th> --}}
                            <th>STATUS</th>
                            <th>APPLICATION DATE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach($loanlist as $lone)
                        <tr>
                            <td class="text-primary" style="cursor:pointer;" onclick="window.location.href ='/admin/userview/{{$lone->user->id}}'">{{Str::ucfirst($lone->user->first_name)}} {{Str::ucfirst($lone->user->last_name)}}</td>
                            <td>₦{{number_format($lone->amount)}}</td>
                            {{-- <td>₦{{number_format($lone->total_paid_back)}}</td> --}}
                            <td>{{$lone->loan_tenor}}</td>
                            <td>{{$lone->interest}}%</td>
                            {{-- <td>{{$lone->interest_paid_back}}%</td> --}}
                            <td class="text-info">{{$lone->status}}</td>
                            <td>{{$lone->created_at->diffForHumans()}}</td>
                            <td><a class="" href="{{route('admin.loan.edit', $lone->id)}}"><button class="btn btn-sm">View More</button></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>

            <!-- PAGINATION SECTION -->
            <section>
                <ul class="pagination justify-content-end">
                    <div class="page-item">{{ $loanlist->links() }}</div>
                </ul>
            </section>
        </main>
	@endsection

