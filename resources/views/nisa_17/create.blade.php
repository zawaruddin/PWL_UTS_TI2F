@extends('nisa_17.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">Tambah Mahasiswa
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
                //
                @endif
                <form method="post" action="{{ route('nisa_17.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="Merk">Merk</label>
                        <input type="Merk" name="merk" class="form-control" id="Merk" aria-describedby="Merk">
                    </div>
                    <div class="form-group">
                        <label for="Jenis">Jenis</label>
                        <input type="Jenis" name="jenis" class="form-control" id="Jenis" ariadescribedby="Jenis">
                    </div>
                    <div class="form-group">
                        <label for="Ukuran">Ukuran</label>
                        <input type="Ukuran" name="ukuran" class="form-control" id="Ukuran" ariadescribedby="Ukuran">
                    </div>
                    <div class="form-group">
                        <label for="Warna">Warna</label>
                        <input type="Warna" name="warna" class="form-control" id="Warna" ariadescribedby="Warna">
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="Harga" name="alamat" class="form-control" id="Harga" aria-describedby="Harga">
                    </div>
                    <div class="form-group">
                        <label for="Gambar">Gambar</label>
                        <input type="Gambar" name="gambar" class="form-control" id="Gambar" aria-describedby="Gambar">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection