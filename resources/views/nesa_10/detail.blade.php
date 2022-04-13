@extends('nesa_10.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Anggota
                </div>
                
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>ID Anggota: </b>{{$anggota_perpustakaans->id_anggota}}</li>
                            <li class="list-group-item"><b>Nama Anggota: </b>{{$anggota_perpustakaans->nama_anggota}}</li>
                            <li class="list-group-item"><b>Nomor Telepon: </b>{{$anggota_perpustakaans->nomor_telepon}}</li>
                            <li class="list-group-item"><b>Alamat: </b>{{$anggota_perpustakaans->alamat}}</li>
                            <li class="list-group-item"><b>Jenis Kelamin: </b>{{$anggota_perpustakaans->jenis_kelamin}}</li>
                        </ul>
                    </div>
                
                <a class="btn btn-success mt-3" href="{{ route('nesa_10.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection