@extends('dina_25.master.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Laptop
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Merk: </b>{{$laptop->merk}}</li>
                    <li class="list-group-item"><b>Harga: </b>{{$laptop->harga}}</li>
                    <li class="list-group-item"><b>Processor: </b>{{$laptop->processor}}</li>
                    <li class="list-group-item"><b>RAM: </b>{{$laptop->ram}}</li>
                    <li class="list-group-item"><b>Penyimpanan: </b>{{$laptop->penyimpanan}}</li>
                    <li class="list-group-item"><b>Sistem Operasi: </b>{{$laptop->os}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('laptop.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection