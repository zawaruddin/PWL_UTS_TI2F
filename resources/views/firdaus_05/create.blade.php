@extends('firdaus_05.layout')
 
@section('content')
 
<div class="container mt-5">
 
    <div class="row justify-content-center align-items-center">
    <div class="card" style="width: 24rem;">
    <div class="card-header">
    Tambah Mebel
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
    <form method="post" action="{{ route('mebel.store') }}" id="myForm">
    @csrf
    <div class="form-group">
    <label for="Kode">Kode</label> 
    <input type="text" name="Kode" class="form-control" id="Kode" aria-describedby="Kode" > 
    </div>
    <div class="form-group">
    <label for="Nama">Nama</label> 
    <input type="Nama" name="Nama" class="form-control" id="Nama" aria-describedby="Nama" > 
    </div>
    <div class="form-group">
    <label for="Jenis">Kelas</label> 
    <input type="Kelas" name="Kelas" class="form-control" id="Kelas" aria-describedby="Kelas" > 
    </div>
    <div class="form-group">
    <label for="Harga">Harga</label> 
    <input type="Harga" name="Harga" class="form-control" id="Harga" aria-describedby="Harga" > 
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
    </div>
@endsection