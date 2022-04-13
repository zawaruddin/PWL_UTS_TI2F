@extends('nesa_10.layout')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Anggota
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
                    <form method="post" action="{{ route('nesa_10.store') }}" id="myForm">
                    @csrf
                        <div class="form-group">
                            <label for="id_anggota">ID Anggota</label>
                            <input type="id_anggota" name="id_anggota" class="form-control" id="id_anggota" ariadescribedby="id_anggota" >
                        </div>
                        <div class="form-group">
                            <label for="nama_anggota">Nama Anggota</label>
                            <input type="nama_anggota" name="nama_anggota" class="form-control" id="nama_anggota" ariadescribedby="nama_anggota" >
                        </div>
                        <div class="form-group">
                            <label for="nomor_telepon">Nomor Telepon</label>
                            <input type="nomor_telepon" name="nomor_telepon" class="form-control" id="nomor_telepon" ariadescribedby="nomor_telepon" >
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="alamat" name="alamat" class="form-control" id="alamat" ariadescribedby="alamat" >
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="jenis_kelamin" name="jenis_kelamin" class="form-control" id="jenis_kelamin" ariadescribedby="jenis_kelamin" >
                        </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection