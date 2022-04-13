@extends('zalfa_21.layout')

@section('content')

    <div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Tambah Mahasiswa
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
            <form method="post" action="{{ route('ProdukSnack.store') }}" id="myForm">
            @csrf
                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="Nama" aria-describedby="Nama" >
                </div>
                <div class="form-group">
                    <label for="Merk">Merk</label>
                    <input type="text" name="merk" class="form-control" id="Merk" aria-describedby="Merk" >
                </div>
                <div class="form-group">
                    <label for="Jenis">Jenis</label>
                    <input type="text" name="jenis" class="form-control" id="Jenis" aria-describedby="Jenis" >
                </div>
                <div class="form-group">
                    <label for="Berat">Berat</label>
                    <input type="text" name="berat" class="form-control" id="Berat" aria-describedby="Berat" >
                </div>
                <div class="form-group">
                    <label for="Harga">Harga</label>
                    <input type="text" name="harga" class="form-control" id="harga" aria-describedby="harga" >
                </div>
                <div class="form-group">
                    <label for="Expired_Date">ExpiredDate</label>
                    <input type="date" name="expired_date" class="form-control" id="Expired_Date" aria-describedby="Expired_Date" >
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection