@extends('windo_03.layout')
 
@section('content')
 
<div class="container mt-5">
 
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">Tambah Data Sekolah</div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong>Ada Masalah Pada Data yang diInput-kan.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('mahasiswas.store') }}" id="myForm">
            @csrf
            <div class="form-group">
                <label for="NPSN">NPSN</label> 
                    <input type="text" name="NPSN" class="form-control" id="NPSN" aria-describedby="NPSN" > 
            </div>
                <div class="form-group">
                    <label for="nama_sekolah">Nama Sekolah</label> 
                        <input type="nama_sekolah" name="nama_sekolah" class="form-control" id="nama_Sekolah" aria-describedby="nama_sekolah" > 
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label> 
                        <input type="alamat" name="alamat" class="form-control" id="alamat" aria-describedby="alamat" > 
                </div>
                <div class="form-group">
                    <label for="no_telepon">No Telepon</label> 
                        <input type="no_telepon" name="no_telepon" class="form-control" id="no_telepon" aria-describedby="no_telepon" > 
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>
 </div>
@endsection