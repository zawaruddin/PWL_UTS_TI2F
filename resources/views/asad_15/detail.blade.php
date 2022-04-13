@extends('karyawan.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">Detail Karyawan</div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama:</b>{{$Mahasiswa->nama}}</li>
                    <li class="list-group-item"><b>Jabatan:</b>{{$Mahasiswa->jabatan}}</li>
                    <li class="list-group-item"><b>Alamat:</b>{{$Mahasiswa->alamat}}</li>
                    <li class="list-group-item"><b>No Hp:</b>{{$Mahasiswa->hp}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('mahasiswa.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection