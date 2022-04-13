@extends('aliyya_22.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Data Motor
            </div>
            <div class="card-body">
                {{-- <div class="form-group">
                    <label for="id_motor">ID Motor</label>
                    <input type="text" name="id_motor" class="form-control" id="id_motor" aria-describedby="id_motor" value="{{$motor->id_motor}}">
            </div> --}}
            <div class="form-group">
                <label for="nama_motor">Nama Motor</label>
                <input type="text" name="nama_motor" class="form-control" id="nama_motor" aria-describedby="nama_motor" value="{{$motor->nama_motor}}" readonly>
            </div>
            <div class="form-group">
                <label for="merk_motor">Merk Motor</label>
                <input readonly type="text" name="merk_motor" class="form-control" id="merk_motor" aria-describedby="merk_motor" value="{{$motor->merk_motor}}">
            </div>
            <div class="form-group">
                <label for="transmisi">Transmisi</label>
                <input readonly type="text" name="transmisi" class="form-control" id="transmisi" aria-describedby="transmisi" value="{{$motor->transmisi}}">
            </div>
            <div class="form-group">
                <label for="warna_motor">Warna</label>
                <input readonly type="text" name="warna_motor" class="form-control" id="warna_motor" aria-describedby="warna_motor" value="{{$motor->warna_motor}}">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input readonly type="text" name="harga" class="form-control" id="harga" aria-describedby="total_harga" value="{{$motor->harga}}">
            </div>
        </div>
        <a class="btn btn-success mt3" href="{{route('motor.index')}}">Kembali</a>
    </div>
</div>
</div>
@endsection