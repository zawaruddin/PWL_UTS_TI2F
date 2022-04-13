@extends('rifqi_01.layout')

@section('title', 'Show Tas')

@section('content')
<div class="container-fluid">
    <h3 class="text-center">Tas Show</h3>
    <div class="container mt-5">
        <a href="{{ route('tas.index') }}" class="btn btn-secondary">Back</a><br><br>
        <div class="card">
            <h5 class="card-header">{{ $ta->nama }}</h5>
            <div class="card-body">
                <p class="card-text">Jenis : {{ $ta->jenis }}</p>
                <p class="card-text"><span class="badge bg-primary">Rp. {{ $ta->harga }}</span></p>
            </div>
        </div>
    </div>
</div>
@endsection