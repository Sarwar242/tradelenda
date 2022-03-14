@extends('admin.layouts.master')
@section('title','Loans')

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

<section>
  <h4 class="page-title font-weight-bold">
    <i class="fa fa-navicon pr-2 d-lg-none" style="cursor:pointer" onclick="openNav()"></i> Loans
</h4>
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
            <a href="#approvedLoans" class="nav-link">
                Approved Loans
            </a>
        </li>
        <li class="nav-item">
            <a href="#disbursedLoans" class="nav-link">
                Disbursed Loans
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
        <li class="nav-item">
            <a href="#npls" class="nav-link">
                NPLs
            </a>
        </li>
    </ul>
    <div class="dropdown-nav">
        <select class="form-control">
            <option value="allLoanApplications">Loan Applications</option>
            <option value="approvedLoans">Approved Loans</option>
            <option value="disbursedLoans">Disbursed Loans</option>
            <option value="unpaidLoans">Unpaid Loans</option>
            <option value="paidLoans">Paid Loans</option>
            <option value="npls">NPLs</option>
        </select>
    </div>
    <div class="search-group">

    </div>
</nav>

</section>


<!-- GRID SECTION -->
<section class="table-responsive-lg mt-3">
    <div id="allLoanApplications">
        <table id="dataTable"  class="table">
            <thead class="thead-light">
                <tr>
                    <th>NAME</th>
                    <th>AMOUNT</th>
                    <th>LOAN TENOR</th>
                    <th>INTEREST(%)</th>
                    <th>APPLICATION DATE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($loans->where('status','pending') as $loan)
                    <tr>
                        <td style="cursor: pointer;" onclick="window.location.href ='/admin/userview/{{$loan->user->id}}'">{{Str::ucfirst($loan->user->first_name)}}  {{Str::ucfirst($loan->user->last_name)}} </td>
                        <td>₦{{number_format($loan->amount)}}</td>
                        <td>{{$loan->loan_tenor}}</td>
                        <td>{{$loan->interest}}</td>
                        <td>{{$loan->created_at->format('d/m/y')}}</td>
                        <td>
                            <div class="actions">
                            <div class="btn-group">
                            <button type="button" class="btn btn-primary">Options</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown">
                                <a class="dropdown-item btn-success" href="{{route('admin.loan.notify', $loan->id)}}">Notify</a>
                            {{--  <a class="dropdown-item btn-success" href="{{route('admin.loan.approve', $loan->id)}}">Approve</a>
                                <a class="dropdown-item" href="{{route('admin.loan.reject', $loan->id)}}">Reject</a> --}}
                                <a class="dropdown-item" href="{{route('admin.loan.edit', $loan->id)}}">View</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item btn-danger delete" data-confirm="Are you sure?" href="{{route('admin.loan.delete', $loan->id)}}">Delete</a>
                                </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>

    <div id="approvedLoans" class="d-none">
        <table id="dataTable2"  class="table">
            <thead class="thead-light">
                <tr>
                    <th>NAME</th>
                    <th>AMOUNT</th>
                    <th>LOAN TENOR</th>
                    <th>INTEREST(%)</th>
                    <th>APPLICATION DATE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($loans->where('status','approved') as $loan)
                    <tr>
                        <td style="cursor: pointer;" onclick="window.location.href ='/admin/userview/{{$loan->user->id}}'">{{Str::ucfirst($loan->user->first_name)}}  {{Str::ucfirst($loan->user->last_name)}} </td>
                        <td>₦{{number_format($loan->amount)}}</td>
                        <td>{{$loan->loan_tenor}}</td>
                        <td>{{$loan->interest}}</td>
                        <td>{{$loan->created_at->format('d/m/y')}}</td>
                        <td>
                            <div class="actions">
                            <div class="btn-group">
                            <button type="button" class="btn btn-primary">Options</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown">
                                <a class="dropdown-item btn-success" href="{{route('admin.loan.notify', $loan->id)}}">Notify</a>
                            {{--  <a class="dropdown-item btn-success" href="{{route('admin.loan.approve', $loan->id)}}">Approve</a>
                                <a class="dropdown-item" href="{{route('admin.loan.reject', $loan->id)}}">Reject</a> --}}
                                <a class="dropdown-item" href="{{route('admin.loan.edit', $loan->id)}}">View</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item btn-danger delete" data-confirm="Are you sure?" href="{{route('admin.loan.delete', $loan->id)}}">Delete</a>
                                </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>

    <div id="disbursedLoans" class="d-none">
        <table id="dataTable3"  class="table">
            <thead class="thead-light">
                <tr>
                    <th>NAME</th>
                    <th>AMOUNT</th>
                    <th>LOAN TENOR</th>
                    <th>INTEREST(%)</th>
                    <th>APPLICATION DATE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($loans->where('status','disbursed') as $loan)
                    <tr>
                        <td style="cursor: pointer;" onclick="window.location.href ='/admin/userview/{{$loan->user->id}}'">{{Str::ucfirst($loan->user->first_name)}}  {{Str::ucfirst($loan->user->last_name)}} </td>
                        <td>₦{{number_format($loan->amount)}}</td>
                        <td>{{$loan->loan_tenor}}</td>
                        <td>{{$loan->interest}}</td>
                        <td>{{$loan->created_at->format('d/m/y')}}</td>
                        <td>
                            <div class="actions">
                            <div class="btn-group">
                            <button type="button" class="btn btn-primary">Options</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown">
                                <a class="dropdown-item btn-success" href="{{route('admin.loan.notify', $loan->id)}}">Notify</a>
                            {{--  <a class="dropdown-item btn-success" href="{{route('admin.loan.approve', $loan->id)}}">Approve</a>
                                <a class="dropdown-item" href="{{route('admin.loan.reject', $loan->id)}}">Reject</a> --}}
                                <a class="dropdown-item" href="{{route('admin.loan.edit', $loan->id)}}">View</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item btn-danger delete" data-confirm="Are you sure?" href="{{route('admin.loan.delete', $loan->id)}}">Delete</a>
                                </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>

    <div id="unpaidLoans" class="d-none">
        <table id="dataTable4"  class="table">
            <thead class="thead-light">
                <tr>
                    <th>NAME</th>
                    <th>AMOUNT</th>
                    <th>LOAN TENOR</th>
                    <th>INTEREST(%)</th>
                    <th>APPLICATION DATE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($loans->where('status','declined') as $loan)
                    <tr>
                        <td style="cursor: pointer;" onclick="window.location.href ='/admin/userview/{{$loan->user->id}}'">{{Str::ucfirst($loan->user->first_name)}}  {{Str::ucfirst($loan->user->last_name)}} </td>
                        <td>₦{{number_format($loan->amount)}}</td>
                        <td>{{$loan->loan_tenor}}</td>
                        <td>{{$loan->interest}}</td>
                        <td>{{$loan->created_at->format('d/m/y')}}</td>
                        <td>
                            <div class="actions">
                            <div class="btn-group">
                            <button type="button" class="btn btn-primary">Options</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown">
                                <a class="dropdown-item btn-success" href="{{route('admin.loan.notify', $loan->id)}}">Notify</a>
                            {{--  <a class="dropdown-item btn-success" href="{{route('admin.loan.approve', $loan->id)}}">Approve</a>
                                <a class="dropdown-item" href="{{route('admin.loan.reject', $loan->id)}}">Reject</a> --}}
                                <a class="dropdown-item" href="{{route('admin.loan.edit', $loan->id)}}">View</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item btn-danger delete" data-confirm="Are you sure?" href="{{route('admin.loan.delete', $loan->id)}}">Delete</a>
                                </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>
    </div>

    <div id="paidLoans" class="d-none">
        <table id="dataTable5"  class="table">
            <thead class="thead-light">
                <tr>
                    <th>NAME</th>
                    <th>AMOUNT</th>
                    <th>LOAN TENOR</th>
                    <th>INTEREST(%)</th>
                    <th>APPLICATION DATE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($loans->where('status','paid') as $loan)
                    <tr>
                        <td style="cursor: pointer;" onclick="window.location.href ='/admin/userview/{{$loan->user->id}}'">{{Str::ucfirst($loan->user->first_name)}}  {{Str::ucfirst($loan->user->last_name)}} </td>
                        <td>₦{{number_format($loan->amount)}}</td>
                        <td>{{$loan->loan_tenor}}</td>
                        <td>{{$loan->interest}}</td>
                        <td>{{$loan->created_at->format('d/m/y')}}</td>
                        <td>
                            <div class="actions">
                            <div class="btn-group">
                            <button type="button" class="btn btn-primary">Options</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown">
                                <a class="dropdown-item btn-success" href="{{route('admin.loan.notify', $loan->id)}}">Notify</a>
                            {{--  <a class="dropdown-item btn-success" href="{{route('admin.loan.approve', $loan->id)}}">Approve</a>
                                <a class="dropdown-item" href="{{route('admin.loan.reject', $loan->id)}}">Reject</a> --}}
                                <a class="dropdown-item" href="{{route('admin.loan.edit', $loan->id)}}">View</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item btn-danger delete" data-confirm="Are you sure?" href="{{route('admin.loan.delete', $loan->id)}}">Delete</a>
                                </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>

    <div id="npls" class="d-none">
        <table id="dataTable6"  class="table">
            <thead class="thead-light">
                <tr>
                    <th>NAME</th>
                    <th>AMOUNT</th>
                    <th>LOAN TENOR</th>
                    <th>INTEREST(%)</th>
                    <th>APPLICATION DATE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($loans->where('status','npl') as $loan)
                    <tr>
                        <td style="cursor: pointer;" onclick="window.location.href ='/admin/userview/{{$loan->user->id}}'">{{Str::ucfirst($loan->user->first_name)}}  {{Str::ucfirst($loan->user->last_name)}} </td>
                        <td>₦{{number_format($loan->amount)}}</td>
                        <td>{{$loan->loan_tenor}}</td>
                        <td>{{$loan->interest}}</td>
                        <td>{{$loan->created_at->format('d/m/y')}}</td>
                        <td>
                            <div class="actions">
                            <div class="btn-group">
                            <button type="button" class="btn btn-primary">Options</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown">
                                <a class="dropdown-item btn-success" href="{{route('admin.loan.notify', $loan->id)}}">Notify</a>
                            {{--  <a class="dropdown-item btn-success" href="{{route('admin.loan.approve', $loan->id)}}">Approve</a>
                                <a class="dropdown-item" href="{{route('admin.loan.reject', $loan->id)}}">Reject</a> --}}
                                <a class="dropdown-item" href="{{route('admin.loan.edit', $loan->id)}}">View</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item btn-danger delete" data-confirm="Are you sure?" href="{{route('admin.loan.delete', $loan->id)}}">Delete</a>
                                </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>

</section>

</main>
@endsection

@section('script')
<script type="text/javascript">
    $('[data-countdown]').each(function() {
        var $this = $(this), finalDate = $(this).data('countdown');

        // console.log($this);
        $this.countdown(finalDate, function(event) {
            $this.html(event.strftime('%D days %H:%M:%S'));
        });
    });
</script>

<script>
    var deleteLinks = document.querySelectorAll('.delete');

    for (var i = 0; i < deleteLinks.length; i++) {
        deleteLinks[i].addEventListener('click', function(event) {
            event.preventDefault();

            var choice = confirm(this.getAttribute('data-confirm'));

            if (choice) {
                window.location.href = this.getAttribute('href');
            }
        });
    }
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTable5').DataTable({
            responsive: true,
            'aoColumnDefs': [{
        'bSortable': false,
        'aTargets': [-1,-2] /* 1st one, start by the right */
    }]
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTable6').DataTable({
            responsive: true,
            'aoColumnDefs': [{
        'bSortable': false,
        'aTargets': [-1,-2] /* 1st one, start by the right */
    }]
        });
    });
</script>
@endsection
