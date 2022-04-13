@extends('minuman.layout')
@section('content')
<div class="container mt-5"><div class="row justify-content-center align-items-center">
	<div class="card" style="width: 24rem;">
		<div class="card-header">
			Edit minuman
		</div>
		<div class="card-body">
			@if ($errors->any())
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There were some problems with your input.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<form method="post" action="{{ route('minuman.update', $minuman->Rasa) }}" id="myForm">
				@csrf
				@method('PUT')
				<div class="form-group">
					<label for="Rasa">Rasa</label>
					<input type="text" name="Rasa" class="form-control" id="Rasa" value="{{ $minuman-
					>Rasa }}" aria-describedby="Rasa" >
				</div>
				<div class="form-group">
					<label for="Ukuran">Ukuran</label>
					<input type="text" name="Ukuran" class="form-control" id="Ukuran" value="{{ $minuman-
					>Ukuran }}" aria-describedby="Ukuran" >
				</div>
				
				
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
</div>
@endsection