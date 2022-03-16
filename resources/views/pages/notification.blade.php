@extends('layouts.app')
@section('title', '|| Notifications')
@section('content')

@include('pages.aside')

<div class="dashb">
    <div class="container container_con" style="background-color: white; padding: 15px 5px 5px;">
        <div class="row" style="margin-right: 0px; margin-left:0px;">
            <div class="col-md-8 col-sm-9 col-xs-10">
                <p style="margin-bottom: 0px; font-weight: bold;">Notifications</p>
                <div style="font-size: 0.75rem;"> Notifications </div>
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
       @if(empty(Auth::user()->bvn) || empty(Auth::user()->business_address)|| empty(Auth::user()->bank_name))
    <div style="background-color: rgb(163, 84, 163);">
        <p style="padding: 5px 15px; color: white; font-size: 0.75rem;">Your profile is incomplete. <a href="{{url('/profile')}}" id="dashb_link">Click to complete your profile</a></p>
    </div>
@else
@endif
</div>

<main class="main">
    <section class="page-title-bar d-flex flex-wrap justify-content-between">
        {{-- <h4 class="page-title font-weight-bold">
            <i class="fa fa-navicon pr-2 d-lg-none" style="cursor:pointer" onclick="openNav()"></i> Notifications
        </h4> --}}
        <button  class="btn btn-light d-flex flex-wrap ml-auto" type="button" onclick="window.location.href ='/notifications/readall'" class="btn btn-light">Mark all as Read</button>
    </section>

    <section class="row flex-column mt-4">
        @foreach(auth()->user()->notifications()->paginate(15) as $notification)
        <div class="col-lg-9 col-md-10 col-sm-10 mt-2 notification-item">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <i class="fa fa-circle mr-4 notif-status {{$notification->data['status'] && $notification->data['status'] == "declined" ? 'notif-status-error': 'notif-status-success' }} "></i>
                    <section class="notif-message">
                        <p class="card-text mb-1">
                            {!!$notification->data['message']!!}
                            <span class="sticky-top pl-2"  onclick="window.location.href ='/notifications/delete/{{$notification->id}}'" style="cursor:pointer;"><i class="fa fa-minus-circle"></i></span>
                        </p>
                        <small class="card-title">{{$notification->created_at->diffForHumans()}}</small>
                    </section>
                </div>
            </div>
        </div>
        @endforeach
<br> <section class="row flex-column mt-4">
        <ul class="col-lg-9 col-md-10 col-sm-10 mt-2 pagination justify-content-end">
            <div class="page-item">{{auth()->user()->notifications()->paginate(15)->links()}}</div>
        </ul>
    </section>
    </section>
    <br>



</main>
@endsection
