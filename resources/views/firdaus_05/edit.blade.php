@extends('firdaus_05.layout')
 
@section('content')
 
    <div class="container mt-5">
    <div class="row justify-content-center align-items-center">
    <div class="card" style="width: 24rem;">
    <div class="card-header">
    Edit Mebel
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
    <form method="post" action="{{ route('mebel.update', $Mebel->kode) }}" id="myForm">
    @csrf
    @method('PUT')
    <div class="form-group">
    <label for="Kode">Kode</label> 
    <input type="text" name="Kode" class="form-control" id="Kode" value="{{ $Mebel->kode }}" aria-describedby="Kode" > 
    </div>
    <div class="form-group">
    <label for="Nama">Nama</label> 
    <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $Mebel->nama }}" aria-describedby="Nama" > 
    </div>
    <div class="form-group">
    <label for="Jenis">Jenis</label> 
    <input type="Jenis" name="Jenis" class="form-control" id="Jenis" value="{{ $Mebel->jenis }}" aria-describedby="Jenis" > 
    </div>
    <div class="form-group">
    <label for="Harga">Harga</label> 
    <input type="Harga" name="Harga" class="form-control" id="Harga" value="{{ $Mebel->harga }}" aria-describedby="Harga" > 
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
    </div>
@endsection