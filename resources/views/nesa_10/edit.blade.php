@extends('nesa_10.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Anggota
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
            <form method="post" action="{{ route('nesa_10.update', $anggota_perpustakaans->id_anggota) }}" id="myForm">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="id_anggota">ID Anggota</label>
                    <input type="text" name="id_anggota" class="form-control" id="id_anggota" value="{{ $anggota_perpustakaans->id_anggota }}" aria-describedby="id_anggota" >
                </div>
                <div class="form-group">
                    <label for="nama_anggota">Nama Anggota</label>
                    <input type="text" name="nama_anggota" class="form-control" id="nama_anggota" value="{{ $anggota_perpustaakans->nama_anggota }}" aria-describedby="nama_anggota" >
                </div>
                <div class="form-group">
                    <label for="nomor_telepon">Nomor Telepon</label>
                    <input type="text" name="nomor_telepon" class="form-control" id="nomor_telepon" value="{{ $anggota_perpustaakans->nomor_telepon }}" aria-describedby="nomor_telepon" >
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $anggota_perpustaakans->alamat }}" aria-describedby="alamat" >
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="{{ $anggota_perpustaakans->jenis_kelamin }}" aria-describedby="jenis_kelamin" >
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection