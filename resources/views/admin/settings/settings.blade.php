@extends('admin.layouts.master')
@section('title','Settings')
@section('contents')

@include('admin.layouts.sidebar')
<div id="wrapper">
<div class="card-body">
@if(Session::has('success'))

<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">
        x
    </button>
    <strong>
      {!! session('success')!!}   @php Session::forget('success') @endphp &nbsp;&nbsp;
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
</div>
@endif



    <div class="auth-wrapper auth-wrapper-2">
        <div class="container-fluid">
                <div class="auth-box">
                    <div class="container-fluid panel-auth">
                        
                        <div class="col-md-12 col-sm-12 col-xs-12 content">
                            <div class="panel-auth-con">
                                <div class="">
                                    <h2><b>Change Rates</b></h2>
                                </div>
                                <form class="form-auth-small" method="POST" action="{{ route('admin.settings.update.submit', $settings[0]->slug) }}" enctype="multipart/form-data" novalidate="novalidate">
                                    @csrf
                                    <div class="col-md-12 row">
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12" style="padding:0px"> 
                                            <input id="email"  class="form-control" id="Interest" name="value" value="{{$settings[0]->value}}" placeholder="interest rate">
                                        </div>
                                    </div>
                                    
                                    <button type="submit" id="submit" class="btn btn-primary btn-lg btn-block">Update</button> 
                                </form>
                            </div>
                        </div>
                    
                    </div>
                    
                    <div class="clearfix"></div>
                </div>
            <div class="col-md-2 col-xs-12"></div>
        </div>
    </div>
</div>

<!-- END WRAPPER -->
@endsection
