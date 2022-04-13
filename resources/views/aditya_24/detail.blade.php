@extends('aditya_24.layout')

@section('content')
<div class="container mt-5">
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Detail Mahasiswa
 </div>
 <div class="card-body">
 <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nim: </b>{{$lemaries->id_lemaries}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$lemaries->merek}}</li>
                    <li class="list-group-item"><b>Jurusan: </b>{{$lemaries->jumlah_pintu}}</li>
                    <li class="list-group-item"><b>Email: </b>{{$lemaries->berat}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$lemaries->warna}}</li>
                    <li class="list-group-item"><b>Tanggal Lahir: </b>{{$lemaries->harga}}</li>
 </ul>
 </div>
 <a class="btn btn-success mt-3" href="{{ route('webnya.index') }}">Kembali</a>
 </div>
 </div>
</div>
@endsection