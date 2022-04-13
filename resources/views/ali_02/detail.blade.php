@extends('sepatu.layout')
@section('content')
<div class="container mt-5">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
Detail Sepatu
</div>
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item"><b>Warna: </b>{{$Sepatu->warna}}</li>
<li class="list-group-item"><b>Ukuran: </b>{{$Sepatu->ukuran}}</li>
<li class="list-group-item"><b>Bahan: </b>{{$Sepatu->bahan}}</li>
<li class="list-group-item"><b>Harga: </b>{{$Sepatu->harga}}</li>
</ul>
</div>
<a class="btn btn-success mt-3" href="{{ route('mahasiswa.index') }}">Kembali</a>
</div>
</div>
</div>
@endsection