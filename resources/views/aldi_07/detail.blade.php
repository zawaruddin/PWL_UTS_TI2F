@extends('aldi_07.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Kendaraan Umum
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama: </b>{{$Mahasiswa->nama}}</li>
                    <li class="list-group-item"><b>Roda: </b>{{$Mahasiswa->roda}}</li>
                    <li class="list-group-item"><b>Nomor: </b>{{$Mahasiswa->nomor}}</li>
                    <li class="list-group-item"><b>Jenis: </b>{{$Mahasiswa->jenis}}</li>
                    <li class="list-group-item"><b>Tahun: </b>{{$Mahasiswa->tahun}}</li>
                    <li class="list-group-item"><b>Merk: </b>{{$Mahasiswa->kelas->merk}}</li>
                    <li class="list-group-item"><b>Muatan: </b>{{$Mahasiswa->muatan}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{route('aldi_07.index')}}">Kembali</a>
        </div>
    </div>
</div>
//
@endsection
