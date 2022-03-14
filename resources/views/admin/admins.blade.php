@extends('admin.layouts.master')
@section('title','Admins')

@section('contents')
@include('admin.layouts.sidebar')
	<div>
      @if(Session::has('success'))
              <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">
                      x
                  </button>
                  <strong>
                    {!! session('success')!!}   @php Session::forget('success') @endphp
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
          <main class="main">
            <section class="page-title-bar d-flex flex-wrap justify-content-between mb-3">
                <h4 class="page-title font-weight-bold">
                    <i class="fa fa-navicon pr-2 d-lg-none" style="cursor:pointer" onclick="openNav()"></i> Account
                </h4>
                <div class="actions d-flex flex-wrap ml-auto">
                    <div>
                    <a href="{{url('admin/admin/create')}}" style="margin-right:5px;" class="btn btn-primary">
                        Add Administrator
                    </a>
                </div>
                    <div>
                    <a href="{{route('admin.password.change')}}" class="btn btn-primary">
                        Change password
                    </a>
                    </div>
                </div>

            </section>

            <section class="row mt-3">
                <div class="col-md-4 col-sm-6 search-group">

                </div>
            </section>

            <section class="table-responsive-lg mt-3">
                <table id="dataTable"  class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>FULL NAME</th>
                            <th>EMAIL</th>
                            <th>PHONE NUMBER</th>
                            <th>ROLE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                      @foreach(App\Admin::latest()->get() as $admin)
                        <tr>
                            <td>{{$admin->name}}</td>
                            <td>{{$admin->email}}</td>
                            <td>{{$admin->phone_no}}</td>
                            <td>{{$admin->type}}</td>
                            <td>
                                @if(auth()->guard('admin')->user()->type=="Super Admin")
                                    <a href="{{route('admin.profile.update')}}" class="text-primary">

                                        <i class="fa fa-pencil" data-tooltip="tooltip" data-placement="bottom" title="Edit"></i>
                                    </a>
                                    <i class="del fa fa-trash text-primary"  data-tooltip="tooltip" data-placement="bottom" data-confirm="Are you sure to delete the Admin?" data-url="{{route('admin.admin.delete',$admin->id)}}"  data-toggle="modal" data-target="#alertModal" data-backdrop="static" title="Delete"></i>
                                @else

                                @endif
                        </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </section>

            <!-- The Modal -->
            <div class="modal fade alert" id="alertModal">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <!-- Modal body -->
                        <div class="modal-body text-center">
                            <span class="fa fa-times-circle closebtn" data-dismiss="modal"></span>
                            <h5 class="modal-title font-weight-bold mb-2">
                                Delete Admin?
                            </h5>
                            <p class="w-50">
                                Are you sure you want to delete this Admin?
                            </p>

                            <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cancel</button>
                            <a id="confirm" class="btn btn-primary ml-1">Confirm</a>

                        </div>
                    </div>
                </div>
            </div>
          </div>

        </main>
        {{-- <script src="../../js/jquery.min.js"></script>
            <script src="../../js/bootstrap.bundle.min.js"></script>
            <script src="../../js/site.js"></script> --}}
            <script>
                 $(document).on('click', '.del', function(){
                        var url = $(this).data('url');
                        $('#confirm').attr('href', url);

                });

                $(document).ready(function() {
                    $('[data-tooltip="tooltip"]').tooltip();

                });
            </script>



          {{-- {!! App\Models\Admin::admins()->render() !!} --}}

	<script src="{{ asset('js/backend/jquery.min.js')}}"></script>
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
	@endsection
