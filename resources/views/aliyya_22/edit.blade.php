@extends('aliyya_22.layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Data Motor
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('motor.update', $motor->id_motor) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_motor">Nama Motor</label>
                        <input type="text" name="nama_motor" class="form-control" id="{{ $motor->nama_motor }}" aria-describedby="nama_motor">
                    </div>
                    <div class="form-group">
                        <label for="merk_motor">Merk Motor</label>
                        <input type="text" name="merk_motor" class="form-control" id="{{ $motor->merk_motor }}" aria-describedby="merk_motor">
                    </div>
                    <div class="form-group">
                        <label for="transmisi">Transmisi</label>
                        <input type="text" name="transmisi" class="form-control" id="{{ $motor->transmisi }}" aria-describedby="transmisi">
                    </div>
                    <div class="form-group">
                        <label for="warna_motor">Warna</label>
                        <input type="text" name="warna_motor" class="form-control" id="{{ $motor->jumlah_barang }}" aria-describedby="jumlah_barang">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" class="form-control" id="{{ $motor->harga }}" aria-describedby="harga">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection