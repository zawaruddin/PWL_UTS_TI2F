@extends('firdaus_05.layout')
 
@section('content')
<div class="container mt-5">
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Detail Mebel
 </div>
 <div class="card-body">
 <ul class="list-group list-group-flush">
 <li class="list-group-item"><b>Kode: </b>{{$Mebel->kode}}</li>
 <li class="list-group-item"><b>Nama: </b>{{$Mebel->nama}}</li>
 <li class="list-group-item"><b>Jenis: </b>{{$Mebel->jenis}}</li>
 <li class="list-group-item"><b>Harga: </b>{{$Mebel->harga}}</li>
 </ul>
 </div>
 <a class="btn btn-success mt-3" href="{{ route('mahasiswa.index') }}">Kembali</a>
 </div>
 </div>
</div>
@endsection