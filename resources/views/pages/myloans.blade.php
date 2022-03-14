
@extends('layouts.app')
@section('title', 'Loans')
@section('content')

@include('pages.aside')

<div class="dashb">
    <div class="container container_con" style="background-color: white; padding: 15px 5px 5px;">
        <div class="row" style="margin-right: 0px; margin-left:0px;">
            <div class="col-md-8 col-sm-9 col-xs-10">
                <p style="margin-bottom: 0px; font-weight: bold;">Loans</p>
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

    <section class="loan-title-bar page-title-bar d-flex flex-wrap justify-content-between">
        {{-- <h4 class="page-title font-weight-bold">
            <i class="fa fa-navicon pr-2 d-lg-none" style="cursor:pointer" onclick="openNav()"></i> Loans
        </h4> --}}
        <div class="actions d-flex flex-wrap ml-auto">
            @if(App\Sure::where('email', auth()->user()->email)->count() == 0)
            <button class="btn btn-primary"
            data-toggle="modal"
            data-target="#alertModal"
            data-backdrop="static">
            New Loan Request
        </button>
            @elseif(empty(Auth::user()->bvn) || empty(Auth::user()->business_address)|| empty(Auth::user()->bank_name)|| empty(Auth::user()->customer_id))

                @else
                <button class="btn btn-primary" onclick="window.location.href='/request/loan'"  >
                    New Loan Request
                </button>
            @endif
        </div>
    </section>

    <section class="search-group small-screen-search-box">
        <input class="form-control py-2" type="search" placeholder="search" id="search">
        <span class="fa fa-search"></span>
    </section>

    <section class="loan-grid-container mt-3">
        <nav class="loan-grid-navigation-bar">
            <ul class="nav">
                <li class="nav-item active">
                    <a href="#allLoanApplications" class="nav-link">
                        Loan Applications
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#activeLoans" class="nav-link">
                        Active Loans
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#unpaidLoans" class="nav-link">
                        Unpaid Loans
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#paidLoans" class="nav-link">
                        Paid Loans
                    </a>
                </li>
            </ul>
            <div class="dropdown-nav">
                <select class="form-control">
                    <option value="allLoanApplications">Loan Applications</option>
                    <option value="activeLoans">Active Loans</option>
                    <option value="unpaidLoans">Unpaid Loans</option>
                    <option value="paidLoans">Paid Loans</option>
                </select>
            </div>
            <div class="search-group">
                {{-- <input class="form-control py-2" type="search" placeholder="search" id="search"> --}}
                {{-- <span class="fa fa-search"></span> --}}
            </div>
        </nav>




        <!-- GRID SECTION -->
        <section class="table-responsive-lg mt-3">
            <div id="allLoanApplications">
                <table class="table" id="dataTable">
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
                        @foreach($memmm as $members)
                        <tr>
                            <td class="text-primary">{{$members->reason}}</td>
                            <td>₦{{number_format($members->amount)}}</td>
                            <td>{{$members->loan_tenor}}
                               <br> [
                                    @if ($members->loan_tenor=="30 days")
                                        <span class="clock" data-countdown="{{ $members->created_at->addDays(30)}}"></span>
                                    @elseif($members->loan_tenor=="60 days")
                                        <span class="clock" data-countdown="{{ $members->created_at->addDays(60)}}"></span>
                                    @elseif($members->loan_tenor=="90 days")
                                        <span class="clock" data-countdown="{{ $members->created_at->addDays(90)}}"></span>
                                    @elseif($members->loan_tenor=="180 days")
                                        <span class="clock" data-countdown="{{ $members->created_at->addDays(180)}}"></span>
                                    @endif
                              ]
                            </td>
                            <td>{{$members->interest}}%</td>
                            <td>{{$members->status}}</td>
                            <td>
                            <a href="{{url('/view/loan/details/'.$members->id)}}" class="text-primary">
                            <button class="btn btn-sm btn-subtle">View More</button></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div id="activeLoans" class="d-none">
                <table class="table" id="dataTable2">
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
                        @foreach($ispending as $mkolo)
                        <tr>
                            <td class="text-primary">{{$mkolo->reason}}</td>
                            <td>₦{{number_format($mkolo->amount)}}</td>
                            <td>{{$mkolo->loan_tenor}}
                                <br> [
                                    @if ($members->loan_tenor=="30 days")
                                        <span class="clock" data-countdown="{{ $members->created_at->addDays(30)}}"></span>
                                    @elseif($members->loan_tenor=="60 days")
                                        <span class="clock" data-countdown="{{ $members->created_at->addDays(60)}}"></span>
                                    @elseif($members->loan_tenor=="90 days")
                                        <span class="clock" data-countdown="{{ $members->created_at->addDays(90)}}"></span>
                                    @elseif($members->loan_tenor=="180 days")
                                        <span class="clock" data-countdown="{{ $members->created_at->addDays(180)}}"></span>
                                    @endif
                              ]</td>
                            <td>{{$mkolo->interest}}%</td>
                            <td>{{$mkolo->status}}</td>
                            <td>
                            <a href="{{url('/view/loan/details/'.$mkolo->id)}}" class="text-primary">
                            <button class="btn btn-sm btn-subtle">View More</button></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div id="unpaidLoans" class="d-none">
                <table class="table" id="dataTable3">
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
                        @foreach($isdeclined as $mkoko)
                        <tr>
                            <td class="text-primary">{{$mkoko->reason}}</td>
                            <td>₦{{number_format($mkoko->amount)}}</td>
                            <td>{{$mkoko->loan_tenor}}
                                <br> [
                                    @if ($members->loan_tenor=="30 days")
                                        <span class="clock" data-countdown="{{ $members->created_at->addDays(30)}}"></span>
                                    @elseif($members->loan_tenor=="60 days")
                                        <span class="clock" data-countdown="{{ $members->created_at->addDays(60)}}"></span>
                                    @elseif($members->loan_tenor=="90 days")
                                        <span class="clock" data-countdown="{{ $members->created_at->addDays(90)}}"></span>
                                    @elseif($members->loan_tenor=="180 days")
                                        <span class="clock" data-countdown="{{ $members->created_at->addDays(180)}}"></span>
                                    @endif
                              ]</td>
                            <td>{{$mkoko->interest}}%</td>
                            <td>{{$mkoko->status}}</td>
                            <td>
                            <a href="{{url('/view/loan/details/'.$mkoko->id)}}" class="text-primary">
                            <button class="btn btn-sm btn-subtle">View More</button></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div id="paidLoans" class="d-none">
                <table class="table" id="dataTable4">
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
                        @foreach($isapproved as $mko)
                        <tr>
                            <td class="text-primary">{{$mko->reason}}</td>
                            <td>₦{{number_format($mko->amount)}}</td>
                            <td>{{$mko->loan_tenor}}
                                <br> [
                                    @if ($members->loan_tenor=="30 days")
                                        <span class="clock" data-countdown="{{ $members->created_at->addDays(30)}}"></span>
                                    @elseif($members->loan_tenor=="60 days")
                                        <span class="clock" data-countdown="{{ $members->created_at->addDays(60)}}"></span>
                                    @elseif($members->loan_tenor=="90 days")
                                        <span class="clock" data-countdown="{{ $members->created_at->addDays(90)}}"></span>
                                    @elseif($members->loan_tenor=="180 days")
                                        <span class="clock" data-countdown="{{ $members->created_at->addDays(180)}}"></span>
                                    @endif
                              ]</td>
                            <td>{{$mko->interest}}%</td>
                            <td>{{$mko->status}}</td>
                            <td>
                            <a href="{{url('/view/loan/details/'.$mko->id)}}" class="text-primary">
                            <button class="btn btn-sm btn-subtle">View More</button></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </section>

        <!-- PAGINATION SECTION -->
        {{-- <section>
            <ul class="pagination justify-content-end">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </section> --}}

    </section>
           <!-- The Modal -->
           <div class="modal fade alert" id="alertModal">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <!-- Modal body -->
                    <div class="modal-body text-center">
                        <span class="fa fa-times-circle closebtn" data-dismiss="modal"></span>
                        <h5 class="modal-title font-weight-bold mb-2">
                            Add a Guarantor
                        </h5>
                        <p>
                            You need to add a guarantor before you can request for a loan
                        </p>
                        <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cancel</button>
                        <a href="{{url('/createguarantor')}}" class="btn btn-primary ml-1">Add</a>
                    </div>
                </div>
            </div>
        </div>
</main>

<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
<script type="text/javascript">
$('[data-countdown]').each(function() {
    var $this = $(this), finalDate = $(this).data('countdown');

    // console.log($this);
      $this.countdown(finalDate, function(event) {
      $this.html(event.strftime('%D days %H:%M:%S'));
    });
 });</script>


@endsection
