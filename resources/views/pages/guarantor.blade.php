@extends('layouts.app')
@section('title', 'Guarantor')
@section('content')

@include('pages.aside')

<div class="dashb">
    <div class="container container_con" style="background-color: white; padding: 15px 5px 5px;">
        <div class="row" style="margin-right: 0px; margin-left:0px;">
            <div class="col-md-8 col-sm-9 col-xs-10">
                <p style="margin-bottom: 0px; font-weight: bold;">Guarantors</p>
                <div style="font-size: 0.75rem;"> Guarantors </div>
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

    <section class="page-title-bar d-flex flex-wrap justify-content-between mb-3">
        {{-- <h4 class="page-title font-weight-bold">
            <i class="fa fa-navicon pr-2 d-lg-none" style="cursor:pointer" onclick="openNav()"></i> Guarantors
        </h4> --}}
        <div class="actions d-flex flex-wrap ml-auto">
            <a href="{{url('/createguarantor')}}" class="btn btn-primary">
                Add New Guarantor
            </a>
        </div>
    </section>

    <section class="row mt-3">
        <div class="col-md-4 col-sm-6 search-group">
            <input class="form-control py-2" type="search" oninput="filterGuarantor()" placeholder="search" id="search">
            <span class="fa fa-search"></span>
        </div>
    </section>

    <section class="table-responsive-lg mt-3">
        <table id="guarantors" class="table" id="dataTable">
            <thead class="thead-light">
                <tr>
                    <th>FULL NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE NUMBER</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            @foreach($guara as $memb)
            <tbody class="bg-white">

                <tr>
                    <td>{{Str::ucfirst($memb->first_name)}} {{Str::ucfirst($memb->last_name)}}</td>
                    <td>{{Str::ucfirst($memb->gemail)}}</td>
                    <td>+234-{{$memb->phoneno}}</td>
                    <td>
                    <a href="{{url('/viewguarantor/'.$memb->id)}}" class="text-primary">

                        <i class="fa fa-eye" data-tooltip="tooltip" data-placement="bottom" title="View"></i>
                    </a>
                    <i class="del fa fa-trash text-primary"  data-tooltip="tooltip" data-placement="bottom" data-url="{{route('delete.gmember',$memb->id)}}"  data-toggle="modal" data-target="#alertModal" data-backdrop="static" title="Delete"></i>
                </td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </section>

    <!-- PAGINATION SECTION -->
    {{-- <section>
        <ul class="pagination justify-content-end">
            <div class="page-item">{{ $guara->links() }}</div>
        </ul>
    </section> --}}

    <!-- The Modal -->
    <div class="modal fade alert" id="alertModal">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body text-center">
                    <span class="fa fa-times-circle closebtn" data-dismiss="modal"></span>
                    <h5 class="modal-title font-weight-bold mb-2">
                        Delete Guarantor?
                    </h5>
                    <p class="w-50">
                        Are you sure you want to delete this guarantor?
                    </p>

                    <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cancel</button>
                    <a id="confirm" class="btn btn-primary ml-1">Confirm</a>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('script')
<script>
    $(document).on('click', '.del', function(){
           var url = $(this).data('url');
           $('#confirm').attr('href', url);

   });

   $(document).ready(function() {
       $('[data-tooltip="tooltip"]').tooltip();

   });
</script>


<script>
    function filterGuarantor() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("search");
      filter = input.value.toUpperCase();
      table = document.getElementById("guarantors");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        td2 = tr[i].getElementsByTagName("td")[1];
        td3 = tr[i].getElementsByTagName("td")[2];
        if (td) {
          txtValue = td.textContent || td.innerText;
          txtValue2 = td2.textContent || td2.innerText;
          txtValue3 = td3.textContent || td3.innerText ;
          if (txtValue.toUpperCase().indexOf(filter) > -1 || txtValue2.toUpperCase().indexOf(filter) > -1 || txtValue3.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>

@endsection
