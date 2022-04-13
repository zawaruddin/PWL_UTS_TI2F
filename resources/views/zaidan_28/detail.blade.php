@extends('zaidan_28.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Smartphone
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama: </b>{{$smartphone->nama}}</li>
                    <li class="list-group-item"><b>Penyimpanan: </b>{{$smartphone->penyimpanan}}</li>
                    <li class="list-group-item"><b>Stok: </b>{{$smartphone->stok}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('hp.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection