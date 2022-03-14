@extends('admin.layouts.master')
@section('title','Users Page')

@section('contents')
@include('admin.layouts.sidebar')

<main class="main">

    <section class="page-title-bar d-flex flex-wrap justify-content-between mb-3">
        <h4 class="page-title font-weight-bold">
            <i class="fa fa-navicon pr-2 d-lg-none" style="cursor:pointer" onclick="openNav()"></i> Users
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
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE NUMBER</th>
                    <th>DATE JOINED</th>
                    <th>ACTION</th>
                </tr>
            </thead>

            <tbody class="bg-white">
                @foreach($ulist as $useruus)
                <tr>
                    <td><img src="{{$useruus->user_image}}" alt="" style="width: 40px;height: 40px;border-radius: 50px;"> {{Str::ucfirst($useruus->first_name) }} {{Str::ucfirst($useruus->last_name)}}</td>
                    <td>{{Str::ucfirst($useruus->email)}}</td>
                    <td>+234-{{$useruus->phone_no}}</td>
                    <td>{{$useruus->created_at}}</td>
                    <td>
                        <div class="actions">
                            <div class="btn-group">
                            <button type="button" class="btn btn-primary">Options</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown">
                                <a class="dropdown-item" href="{{url('/admin/userview/'.$useruus->id)}}">View</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item btn-danger delete" data-confirm="Are you sure?" href="{{route('admin.delete.user',$useruus->id)}}">Delete</a>
                                </div>
                                </div>
                            </div>
                </td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </section>

    <!-- PAGINATION SECTION -->
    {{-- <section>
        <ul class="pagination justify-content-end">
            <div class="page-item">{{ $ulist->links() }}</div>
        </ul>
    </section> --}}

</main>

@endsection
