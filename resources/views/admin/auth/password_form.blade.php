@extends('admin.layouts.master')
@section('title','Change Password')

@section('contents')

        <div class="form-container">

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

          @endif
        </div>
            <!-- WRAPPER -->
    <div id="wrapper">
      <div class="img-con">
          <img src="https://res.cloudinary.com/trade-lenda/image/upload/v1625670285/icons/Group_11433_phlhmx.png" />
      </div>
      <a href="{{url('/admin')}}" class="back"><i class="fa fa-long-arrow-left pr-2"></i><span>Back</span></a>
      <div class="auth-wrapper">
          <div class="container-fluid">
              <div class="auth-box">
                  <div class="container-fluid panel-auth">
                      <div class="col-md-12 col-sm-12 col-xs-12 ">
                          <div class="content-add-admin">
                              <div class="img-con">
                                  <img src="https://res.cloudinary.com/trade-lenda/image/upload/v1624865141/icons/Lock_ga50m1.png" />
                              </div>
                              <h3 style="text-align: center"><b>Create new Password</b></h3>
                              <form  method="POST" action="{{ route('admin.password.update.submit') }}">
                                @csrf
                                  <div class="form-group">
                                      <label for="signin-email" class="">Old Password</label>
                                      <input type="password"  name="old_password" id="signin-email" placeholder="#2AEJFQR" class="form-control @error('old_password') is-invalid @enderror" required>
                                       @error('old_password')
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
                                      <label for="signin-password" class="">New Password</label>
                                      <input type="password" name="password" placeholder="New Password" id="signin-password" class="form-control @error('password') is-invalid @enderror" required>
                                    @error('password')
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
                                      <label for="signin-password" class="">Confirm new Password</label>
                                      <input type="password"  name="password_confirmation" id="signin-password" placeholder="Type the new password again..." class="form-control @error('password') is-invalid @enderror" required>
                                  </div>
                                  <button type="submit" class="btn btn-primary btn-lg btn-block" value="Submit">Continue</button>
                              </form>
                          </div>
                      </div>
                  </div>

                  <div class="clearfix"></div>
              </div>
          </div>
      </div>
  </div>

  <!-- END WRAPPER -->
@endsection
