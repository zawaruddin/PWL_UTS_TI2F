@extends('iqri_12.layout')

@section('content')
<div class="container mt-5">
    
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Mahasiswa
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Nama: </b>{{$Mahasiswa->nama}}</li>
                <li class="list-group-item"><b>Merk: </b>{{$Mahasiswa->merk}}</li>
                <li class="list-group-item"><b>Harga: </b>{{$Mahasiswa->harga}}</li>
                <li class="list-group-item"><b>Suplier: </b>{{$Mahasiswa->suplier}}</li>
                <li class="list-group-item"><b>Tanggal Lahir: </b>{{$Mahasiswa->tanggal_beli}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('iqri_12.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection