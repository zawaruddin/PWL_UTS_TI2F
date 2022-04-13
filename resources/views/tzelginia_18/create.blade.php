@extends('tzelginia_18.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">Tambah Barang
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
                <form method="post" action="{{ route('tzelginia_18.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="kode_brg">Kode Barang</label>
                        <input type="text" name="kode_brg" class="form-control" id="kode_brg" aria-describedby="kode_brg">
                    </div>
                    <div class="form-group">
                        <label for="nama_brg">Nama Barang</label>
                        <input type="text" name="nama_brg" class="form-control" id="nama_brg" ariadescribedby="nama_brg">
                    </div>
                    <div class="form-group">
                        <label for="merk_brg">Merk Barang</label>
                        <input type="text" name="merk_brg" class="form-control" id="merk_brg" ariadescribedby="merk_brg">
                    </div>
                    <div class="form-group">
                        <label for="harga_brg">Harga Barang</label>
                        <input type="number" name="harga_brg" class="form-control" id="harga_brg" ariadescribedby="harga_brg">
                    </div>
                    <div class="form-group">
                        <label for="stok_brg">Stok Barang</label>
                        <input type="number" name="stok_brg" class="form-control" id="stok_brg" ariadescribedby="stok_brg">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection