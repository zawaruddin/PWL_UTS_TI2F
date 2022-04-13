@extends('sepatu.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mt-2">
<h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
</div>
<div class="float-right my-2">
<a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>Warna</th>
<th>Ukuran</th>
<th>Bahan</th>
<th>Harga</th>
<th width="280px">Action</th>
</tr>
@foreach ($sepatu as $spt)
<tr>
<td>{{ $spt ->warna }}</td>
<td>{{ $spt ->ukuran }}</td>
<td>{{ $spt ->bahan }}</td>
<td>{{ $spt ->harga }}</td>
<td>
<form action="{{ route('sepatu.destroy',['sepatu'=>$spt->id]) }}" method="POST">
<a class="btn btn-info" href="{{ route('sepatu.show',$spt->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('sepatu.edit',$spt->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
@endsection