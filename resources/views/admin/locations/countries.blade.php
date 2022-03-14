@extends('admin.layouts.master')
@section('title','Countries')
@section('active','Countries')

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
				<h4>Countries</h4>
			</div>
		</center>
		<table id="dataTableLoc"  class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Name</th>
		      <th scope="col">Short Name</th>
		    </tr>
		  </thead>
		  <tbody>

		   @foreach($countries as $country)
		    <tr>
		      <th scope="row">{{$loop->index+1}}</th>
		      <td style="cursor: pointer;">{{$country->name}}</td>
			  <td style="cursor: pointer;">{{$country->short_name}}</td>
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
