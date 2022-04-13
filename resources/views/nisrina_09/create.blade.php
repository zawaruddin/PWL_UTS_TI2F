@extends('nisrina_09.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Aksesoris Pakaian
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
                    <form method="post" action="{{ route('aksesoris.store') }}" id="myForm">
                        @csrf
                            <div class="form-group">
                                <label for="kode_barang">Kode Barang</label>
                                <input type="text" name="kode_barang" class="form-control" id="kode_barang" aria-describedby="kode_barang">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Aksesoris</label>
                                <input type="nama" name="nama" class="form-control" id="nama" aria-describedby="nama">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="harga" name="harga" class="form-control" id="harga" aria-describedby="harga">
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="stok" name="stok" class="form-control" id="stok" aria-describedby="stok">
                            </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection