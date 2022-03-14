@extends('admin.layouts.master')
@section('title','Cities')

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
	  <hr>
		<center>
			<div class="heading">
				<h4>Cities</h4>
			</div>
		</center>
		<table id="dataTableLoc"  class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Name</th>
		      <th scope="col">State</th>
		      <th scope="col">Country</th>
		    </tr>
		  </thead>
		  <tbody>

		   @foreach($cities as $city)
		    <tr>
		      <th scope="row">{{$loop->index+1}}</th>
		      <td style="cursor: pointer;">{{$city->name}}</td>
			  <td style="cursor: pointer;">{{$city->state ? $city->state->name : ''}}</td>
			  <td style="cursor: pointer;">{{$city->state->country ? $city->state->country->name : ''}}</td>
			</tr>
			@endforeach
		  </tbody>
		</table>
		{{-- {!! App\Models\Union::unions()->render() !!} --}}
		 
	</main>

@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTableLoc').DataTable({
            responsive: true,
        });
    });
</script>
@endsection
