@extends('admin.layouts.master')
@section('title','Notifications')

@section('contents')

@include('admin.layouts.sidebar')

<style>
    .loan-grid-container .loan-grid-navigation-bar {
        position: inherit;
    }
    </style>
<main class="main">
    <section class="page-title-bar d-flex flex-wrap justify-content-between">
        <h4 class="page-title font-weight-bold">
            <i class="fa fa-navicon pr-2 d-lg-none" style="cursor:pointer" onclick="openNav()"></i> Notifications
        </h4>&nbsp;&nbsp;
        <button type="button" onclick="window.location.href ='/admin/notifications/readall'" class="btn btn-light">Mark all as Read</button>
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
                    <a href="#approvedLoans" class="nav-link">
                        Approved Loans
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#disbursedLoans" class="nav-link">
                        Disbursed Loans
                    </a>
                </li>

            </ul>
            <div class="dropdown-nav">
                <select class="form-control">
                    <option value="allLoanApplications">Loan Applications</option>
                    <option value="approvedLoans">Approved Loans</option>
                    <option value="disbursedLoans">Disbursed Loans</option>
                </select>
            </div>
           {{--  <div class="search-group">
                <input class="form-control py-2" type="search" placeholder="search" id="search">
                <span class="fa fa-search"></span>
            </div> --}}
        </nav>




        <!-- GRID SECTION -->
        <section class="table-responsive-lg mt-3">
            <div id="allLoanApplications">
                @foreach(auth()->guard('admin')->user()->notifications()->where(['data->status'=>'pending'])->paginate(10, ['*'], 'application') as $notification)
                <div class="col-lg-9 col-md-10 col-sm-10 mt-2 notification-item">
                 {{-- {{   dd(auth()->guard('admin')->user()->notifications()->where(['data->status'=>'pending'])->paginate(10, ['*'], 'application'))}} --}}
                    <div class="card">
                        <div class="card-body d-flex align-items-center">
                            <i class="fa fa-circle mr-4 notif-status {{is_null($notification->read_at) ? 'notif-status-error': 'notif-status-success' }} "></i>
                            <section class="notif-message">
                                <p class="card-text mb-1">
                                    {{$notification->data['message']}}
                                    <span class="sticky-top pl-2"  onclick="window.location.href ='/admin/notifications/delete/{{$notification->id}}'" style="cursor:pointer;"><i class="fa fa-minus-circle"></i></span>
                                </p>
                                <small class="card-title">{{$notification->created_at->diffForHumans()}}</small>
                            </section>
                        </div>
                    </div>
                </div>
                @endforeach

                <section class="row flex-column mt-4">
                    <ul class="col-lg-9 col-md-10 col-sm-10 mt-2 pagination justify-content-end">
                        <div class="page-item">{{auth()->guard('admin')->user()->notifications()->where('data->status','pending')->paginate(10, ['*'], 'application')->links()}}</div>
                    </ul>
                </section>
            </div>

            <div id="approvedLoans" class="d-none">
                @foreach(auth()->guard('admin')->user()->notifications()->where(['data->status'=>'approved'])->paginate(10, ['*'], 'approved') as $notification)
                <div class="col-lg-9 col-md-10 col-sm-10 mt-2 notification-item">
                    <div class="card">
                        <div class="card-body d-flex align-items-center">
                            <i class="fa fa-circle mr-4 notif-status {{is_null($notification->read_at) ? 'notif-status-error': 'notif-status-success' }} "></i>
                            <section class="notif-message">
                                <p class="card-text mb-1">
                                    {{$notification->data['message']}}
                                    <span class="sticky-top pl-2"  onclick="window.location.href ='/admin/notifications/delete/{{$notification->id}}'" style="cursor:pointer;"><i class="fa fa-minus-circle"></i></span>
                                </p>
                                <small class="card-title">{{$notification->created_at->diffForHumans()}}</small>
                            </section>
                        </div>
                    </div>
                </div>
                @endforeach
                <section class="row flex-column mt-4">
                    <ul class="col-lg-9 col-md-10 col-sm-10 mt-2 pagination justify-content-end">
                        <div class="page-item">{{auth()->guard('admin')->user()->notifications()->where('data->status','approved')->paginate(10, ['*'], 'approved')->links()}}</div>
                    </ul>
                </section>
            </div>

            <div id="disbursedLoans" class="d-none">
                @foreach(auth()->guard('admin')->user()->notifications()->where(['data->status'=>'disbursed'])->paginate(10, ['*'], 'disbursed') as $notification)
                <div class="col-lg-9 col-md-10 col-sm-10 mt-2 notification-item">
                    <div class="card">
                        <div class="card-body d-flex align-items-center">
                            <i class="fa fa-circle mr-4 notif-status {{is_null($notification->read_at) ? 'notif-status-error': 'notif-status-success' }} "></i>
                            <section class="notif-message">
                                <p class="card-text mb-1">
                                    {{$notification->data['message']}}
                                    <span class="sticky-top pl-2"  onclick="window.location.href ='/admin/notifications/delete/{{$notification->id}}'" style="cursor:pointer;"><i class="fa fa-minus-circle"></i></span>
                                </p>
                                <small class="card-title">{{$notification->created_at->diffForHumans()}}</small>
                            </section>
                        </div>
                    </div>
                </div>
                @endforeach
                <section class="row flex-column mt-4">
                    <ul class="col-lg-9 col-md-10 col-sm-10 mt-2 pagination justify-content-end">
                        <div class="page-item">{{auth()->guard('admin')->user()->notifications()->where('data->status','disbursed')->paginate(10, ['*'], 'disbursed')->links()}}</div>
                    </ul>
                </section>
            </div>


        </section>

        <!-- PAGINATION SECTION
        <section>
            <ul class="pagination justify-content-end">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </section>-->


    </section>
</main>
<script src="{{ asset('js/jquery.min.js')}}"></script>
@endsection






