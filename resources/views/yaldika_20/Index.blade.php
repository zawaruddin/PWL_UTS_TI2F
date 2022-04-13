@extends('minuman.layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left mt-2">
			
		</div>
		<div class="float-right my-2">
			<a class="btn btn-success" href="{{ route('minuman.create') }}"> Input minuman</a>
		</div>
	</div>
</div>
@if ($message = Session::get('success'))<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
	<tr>
		<th>Rasa</th>
		<th>Ukuran</th>
		
		<th width="280px">Action</th>
	</tr>
	@foreach ($minuman as $mhs)
	<tr>
		<td>{{ $mhs ->Rasa }}</td>
		<td>{{ $mhs ->Ukuran }}</td>
		
		<td>
			
		</td>
	</tr>
	@endforeach
</table>
@endsection