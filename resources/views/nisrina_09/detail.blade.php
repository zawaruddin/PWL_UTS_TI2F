@extends('nisrina_09.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Aksesoris Pakaian
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Kode Barang: </b>{{$aksesoris->kode_barang}}</li>
                        <li class="list-group-item"><b>Nama Aksesoris: </b>{{$aksesoris->nama}}</li>
                        <li class="list-group-item"><b>Harga: </b>{{$aksesoris->kelas->harga}}</li>
                        <li class="list-group-item"><b>Stok: </b>{{$aksesoris->stok}}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('aksesoris.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection