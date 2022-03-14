@extends('admin.layouts.master')
@section('title','Users Page')

@section('contents')
@include('admin.layouts.sidebar')
<main class="main">
    <section class="account-page-wrapper">
        <section class="mobile-menu d-sm-none">
            <i class="fa fa-navicon pr-2 d-lg-none" style="cursor:pointer" onclick="openNav()"></i>
            <div class="mobile-menu_brand-logo">
                <img src="../../images/mobile-menu-logo.png" alt="Tradelender logo">
            </div>
        </section>
        <section class="loan-view-title-bar page-title-bar d-flex flex-wrap justify-content-between">
            <h4 class="page-title font-weight-bold">
                <i class="fa fa-navicon pr-2 d-lg-none" style="cursor:pointer" onclick="openNav()"></i> Users
            </h4>
        </section>

        <section class="go-back-group d-flex justify-content-between">
            <h6 class="go-back font-weight-bold text-primary">
                <i class="fa fa-long-arrow-left pr-2"></i> Back
            </h6>
        </section>
            <div class="edit-profile-button-container d-sm-none">
                <a href="{{url('/Block')}}" class="btn btn-block d-flex justify-content-between">
                    <span>Block User </span>
                </a>
            </div>
        </section>
        <section class="account-profile-image-container">
            @php $ulists=$udatau @endphp
            <div class="profile-image-wrapper">
                <img src="{{$ulists->user_image}}" alt="Profile Image" class="rounded-circle" width="102" height="102" />
                <div class="change-profile-image-wrapper">
                    <img src="../../images/camera-icon.png" alt="Profile Image" class="rounded-circle" width="12"
                        height="10.5" />
                </div>
            </div>
            <div class="edit-profile-button-container d-none d-sm-block">
                <a href="{{url('/Block User')}}" class="btn btn-block d-flex justify-content-between">
                    <span >Block User </span>
                </a>
            </div>
        </section>

        <section id="accountViewTabsContainer" class="accountTabsContainer bg-white mt-4">
            <section class="account-navigation-container mb-4">
                <nav class="account-navigation-bar">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#personalDetails">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#businessDetails">Business</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#financialDetails">Financial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#loanhistory">loan History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#guarantors">Guarantors</a>
                        </li>
                        @if (isset($ulists->customer_id) && !is_null($ulists->customer_id))
                            <li class="nav-item">
                                <a class="nav-link" href="#transactions">Transactions</a>
                                <input type="hidden" id="user_id" name="user_id" value="{{ $ulists->id }}">
                                <input type="hidden" id="customer_id" name="customer_id" value="{{ $ulists->id }}">
                            </li>
                        @endif
                    </ul>
                </nav>
            </section>

            <div id="personalDetails" class="tab-item row no-gutters justify-content-center px-3 px-md-0 active">
                <section class="col-md-5 col-sm-6 mr-md-3">
                    @php $ulists=$udatau @endphp
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Title</p>
                            <h6 class=" card-text mb-0">{{Str::ucfirst($ulists->title)}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Email address</p>
                            <h6 class="card-text  mb-0">{{Str::ucfirst($ulists->email)}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Share in the company</p>
                            <h6 class="card-text mb-0">{{$ulists->share}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Gender</p>
                            <h6 class="card-text mb-0">{{$ulists->gender}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Identification type</p>
                            <h6 class="card-text  mb-0">{{$ulists->id_type}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Address</p>
                            <h6 class="card-text mb-0">{{Str::ucfirst($ulists->address)}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Country</p>
                            <h6 class="card-text mb-0">{{$ulists->country? $ulists->country->name: ''}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">LGA</p>
                            <h6 class="card-text mb-0">{{$ulists->city? $ulists->city->name: ''}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Marital status</p>
                            <h6 class="card-text mb-0">{{$ulists->marital_status}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Number of dependents</p>
                            <h6 class="card-text mb-0">{{$ulists->dependents}}</h6>
                        </div>
                    </div>
                </section>
                <section class="col-md-5 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Full name</p>
                            <h6 class="card-text mb-0">{{Str::ucfirst($ulists->first_name)}} {{Str::ucfirst($ulists->last_name)}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Position in the company</p>
                            <h6 class="card-text mb-0">{{Str::ucfirst($ulists->position)}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Date of birth</p>
                            <h6 class="card-text mb-0">{{$ulists->dob}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">BVN</p>
                            <h6 class="card-text  mb-0">{{$ulists->bvn}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">ID number</p>
                            <h6 class="card-text mb-0">{{$ulists->id_num}}</h6>
                        </div>
                    </div>
                   {{--  <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Gender</p>
                            <h6 class="card-text mb-0">{{$accview->title}}</h6>
                        </div>
                    </div> --}}
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">State</p>
                            <h6 class="card-text mb-0">{{$ulists->state? $ulists->state->name: ''}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Residential Status</p>
                            <h6 class="card-text mb-0">{{$ulists->residential_status}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">When did you move to this address?</p>
                            <h6 class="card-text mb-0">{{$ulists->wdymtta}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Educational Level</p>
                            <h6 class="card-text mb-0">{{$ulists->edu_level}}</h6>
                        </div>
                    </div>
                </section>
            </div>
            <div id="businessDetails" class="tab-item row no-gutters justify-content-center px-3 px-md-0">
                <section class="col-md-5 col-sm-6 mr-md-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Type of business</p>
                            <h6 class="card-text mb-0">{{$ulists->business_type}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Is the business registered?</p>
                            <h6 class="card-text mb-0">{{$ulists->registered == 1? "Yes":"No"}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Date of business establishment</p>
                            <h6 class="card-text mb-0">{{$ulists->establishment_date}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Country</p>
                            <h6 class="card-text  mb-0">{{$ulists->country? $ulists->country->name: ''}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">LGA</p>
                            <h6 class="card-text mb-0">{{$ulists->city? $ulists->city->name: ''}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Are your business locations owned or rented?</p>
                            <h6 class="card-text mb-0">{{$ulists->owned_or_rented}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Total of employees</p>
                            <h6 class="card-text mb-0">{{$ulists->total_employees}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">What do you sell?</p>
                            <h6 class="card-text mb-0">{{$ulists->sales_method}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Average monthly sales</p>
                            <h6 class="card-text mb-0">{{$ulists->monthly_sales}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">How long have you been in business?</p>
                            <h6 class="card-text mb-0">{{$ulists->business_duration}}</h6>
                        </div>
                    </div>
                    @if(empty($ulists->cac7))
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">CAC7 not uploaded</p>
                        </div>
                    </div>
                @else
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">CAC7</p>
                            <a href="{{$ulists->cac7}}" class="card-link text-primary-dark" target="_blank">
                                Click to view
                            </a>
                        </div>
                    </div>
                    @endif

                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Identification type</p>
                            <h6 class="card-text mb-0">{{$ulists->b_id_type}}</h6>
                        </div>
                    </div>
                </section>
                <section class="col-md-5 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Name of business</p>
                            <h6 class="card-text mb-0">{{Str::ucfirst($ulists->business_name)}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">RC/BN number</p>
                            <h6 class="card-text mb-0">{{$ulists->rc_num}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Business address</p>
                            <h6 class="card-text mb-0">{{Str::ucfirst($ulists->business_address)}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">State</p>
                            <h6 class="card-text  mb-0">{{$ulists->b_state? $ulists->b_state->name: ''}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">When did you move this business?</p>
                            <h6 class="card-text mb-0">{{$ulists->b_wdymtta}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Number of outlets</p>
                            <h6 class="card-text">{{$ulists->outlets}}</h6>
                        </div>
                    </div>
                    {{-- <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">How do you do business?</p>
                            <h6 class="card-text">{{$accview->sales_method}}</h6>
                        </div>
                    </div> --}}
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">What industry does your business belong to?</p>
                            <h6 class="card-text">{{Str::ucfirst($ulists->industry)}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Average monthly expenses</p>
                            <h6 class="card-text mb-0">{{$ulists->monthly_expenses}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Tax Identification Number (TIN)</p>
                            <h6 class="card-text mb-0">{{$ulists->tin}}</h6>
                        </div>
                    </div>
                    @if(empty($ulists->cac2))
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">CAC2 not uploaded</p>
                        </div>
                    </div>
                @else
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">CAC2</p>
                            <a href="{{$ulists->cac2}}" class="card-link text-primary-dark" target="_blank">
                                Click to view
                            </a>
                        </div>
                    </div>
                    @endif

                    @if(empty($ulists->cac_certificate))
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">CAC Certificate not uploaded</p>
                        </div>
                    </div>
                @else
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">CAC Certificate</p>
                            <a href="{{$ulists->cac_certificate}}" class="card-link text-primary-dark" target="_blank">
                            Click to view
                        </a>
                        </div>
                    </div>
                    @endif
                </section>
            </div>
            <div id="financialDetails" class="tab-item row no-gutters justify-content-center px-3 px-md-0">
                <section class="col-md-5 col-sm-6 mr-md-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Bank name</p>
                            <h6 class="card-text">{{Str::ucfirst($ulists->bank_name)}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Account number</p>
                            <h6 class="card-text">{{$ulists->bank_account_number}}</h6>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Local purchasing order (LPO)</p>
                            <a href="{{$udatau->loans}}" class="card-link text-primary-dark" target="_blank">
                                Click to view
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Have you taken out a loan in the past 12 months?</p>
                            <h6 class="card-text">{{$ulists->last_loan_period == 1? "Yes":"No"}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">If yes, how much</p>
                            <h6 class="card-text">{{$ulists->loan_amount}}</h6>
                        </div>
                    </div>

                    @if(empty($ulists->bank_statement))
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Bank statement</p>
                            <p class="">Bank statement not uploaded</p>
                        </div>
                    </div>
                @else
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Bank statement</p>
                            <a href="{{$ulists->bank_statement}}" class="card-link text-primary-dark" target="_blank">
                                Click to view
                            </a>
                        </div>
                    </div>
                    @endif
                </section>
                <section class="col-md-5 col-sm-6 d-flex flex-column">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Account name</p>
                            <h6 class="card-text">{{$ulists->bank_account_name}}</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-1">Has online banking</p>
                            <h6 class="card-text">{{$ulists->has_online_banking == 1? "Yes":"No"}}</h6>
                        </div>
                    </div>

                    <div class="card">

                        <div class="card-body">
                            <p class="card-title mb-1">Proforma invoice</p>
                            <a href="" class="card-link text-primary-dark" target="_blank">
                                Click to view
                            </a>
                        </div>

                    </div>

                </section>
            </div>
            <div id="loanhistory" class="tab-item row no-gutters justify-content-center px-3 px-md-0">
                <section class="table-responsive-lg mt-3">
                    <div id="allLoanApplications">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>REASON</th>
                                    <th>AMOUNT</th>
                                    <th>LOAN TENOR</th>
                                    <th>INTEREST(%)</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(empty($udatau->loans))
                                <h2>No Loan History Available!</h2>
                                @else
                                    @foreach($udatau->loans as $loan)
                                        <tr>
                                            <td class="text-primary">{{Str::ucfirst($loan->reason)}}</td>
                                            <td>₦{{number_format($loan->amount)}}</td>
                                            <td>{{$loan->tenor}}</td>
                                            <td>{{$loan->interest}}%</td>
                                            <td class="text-info">{{$loan->status}}</td>
                                            <td><a href="{{route('admin.loan.edit',$loan->id)}}" class="btn btn-sm">View More</a></td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>

                </section>
            </div>
            <div id="guarantors" class="tab-item row no-gutters justify-content-center px-3 px-md-0">
                <section class="table-responsive-lg mt-3">
                    <div id="allLoanApplications">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>FULL NAME</th>
                                    <th>EMAIL</th>
                                    <th>PHONE NUMBER</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($udatau->sures as $sure)
                                    <tr>
                                        <td class="text-primary">{{Str::ucfirst($sure->first_name)}} {{Str::ucfirst($sure->last_name)}}</td>
                                        <td>{{Str::ucfirst($sure->email)}}</td>
                                        <td>{{$sure->phoneno}}</td>
                                        <td><a href="{{route('admin.viewguarantor',$sure->id)}}" class="btn btn-sm">View More</a></td>
                                    </tr>
                                @empty
                                    <tr><td colspan=5><h4>No Guarantor Available!</h4></td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </section>
            </div>
            @if (isset($transactions['transaction']))
            <div id="transactions" class="tab-item row no-gutters justify-content-center px-3 px-md-0">
               {{-- @php dd($transactions); @endphp --}}
                <section class="table-responsive-lg mt-3">
                    <div id="treeMonthsTransactions">
                        <table id="table" class="table" >
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>TransactionId</th>
                                    <th>Bank Name</th>
                                    <th>Balance</th>
                                    <th>Customer Name</th>

                                    <th style="text-align:center;">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transactions['transaction'] as $transaction)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $transaction['_id'] }}</td>
                                    <td>{{ $transaction['bank']['name'] }}</td>
                                    <td>{{ $transaction['balance'] }}</td>
                                    <td>{{ $transaction['customer']['name'] }}</td>

                                    <td>{{ \Carbon\Carbon::parse($transaction['cleared_date'])->format('d/m/y h:i a') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </section>
            </div>
            @endif
        </section>

        <!-- The Modal -->
        <div class="modal fade alert" id="alertModal">
            <div class="modal-dialog modal-dialkog-scrollable">
                <div class="modal-content">
                    <!-- Modal body -->
                    <div class="modal-body text-center">
                        <span class="fa fa-times-circle closebtn" data-dismiss="modal"></span>
                        <div class="blob-container">
                            <img class="img-fluid" src="#"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('js/jquery.min.js') }}" defer></script>
<script src="{{ asset('js/site.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/js/all.min.js"></script>
@endsection
