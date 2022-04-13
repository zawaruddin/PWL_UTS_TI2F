@extends('windo_03.layout')
 
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">Detail Sekolah</div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>NPSN: </b>{{$Sekolah->NPSN}}</li>
                    <li class="list-group-item"><b>Nama Sekolah: </b>{{$Sekolah->nama_sekolah}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$Sekolah-alamat>}}</li>
                    <li class="list-group-item"><b>No Telepon: </b>{{$Sekolah->no_telepon}}</li>
                </ul>
            </div>
                <a class="btn btn-success mt-3" href="{{ route('sekolah.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection