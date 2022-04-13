@extends('tzelginia_18.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Barang
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Kode Barang: </b>{{$supermarket->kode_brg}}</li>
                    <li class="list-group-item"><b>Nama Barang: </b>{{$supermarket->nama_brg}}</li>
                    <li class="list-group-item"><b>Merk Barang: </b>{{$supermarket->merk_brg}}</li>
                    <li class="list-group-item"><b>Harga Barang: </b>Rp.{{$supermarket->harga_brg}}</li>
                    <li class="list-group-item"><b>Stok Barang: </b>{{$supermarket->stok_brg}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('tzelginia_18.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection