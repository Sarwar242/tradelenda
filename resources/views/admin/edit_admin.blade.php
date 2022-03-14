@extends('admin.layouts.master')
@section('title','Update Profile')

@section('contents')
@include('admin.layouts.sidebar')
  <section class="container-fluid">

  <section class="container-fluid">
    <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-3">
        <div class="form-container">
          <div class="container">
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
            <div class="text-center">
              <h2>Update Profile</h2>
            </div>
          </div>

            <form  method="POST" action="{{ route('admin.profile.update.submit') }}" enctype="multipart/form-data" novalidate="novalidate">
              @csrf
              <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" name="name"  value="{{$admin->name}}" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name Here">
                @error('name')
                  <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">
                      x
                    </button>
                    <strong>
                        {!! $message !!}
                    </strong>
                  </div>
                @enderror
              </div>

              <div class="form-group">
                <label for="Email">Email</label>
                <input type="text" name="email" value="{{$admin->email}}"  class="form-control @error('email') is-invalid @enderror" placeholder="This must be given!">
                @error('email')
                <div class="alert alert-danger alert-block">
                  <button type="button" class="close" data-dismiss="alert">
                    x
                  </button>
                  <strong>
                      {!! $message !!}
                  </strong>
                </div>
                @enderror
              </div>

              <center>
                <input type="submit" class="btn btn-success btn-block" value="Update">
              </center>
            </form>
          </div>
        </section>
      </section>
    </section>

@endsection
