@extends('aditya_24.layout')

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
 @endif
 <form method="post" action="{{ route('webnya.store') }}" id="myForm">
 @csrf
 <div class="form-group">
 <label for="merek">Merek</label>
 <input type="text" name="merek" class="form-control" id="merek" aria-describedby="merek" >
 </div>
 <div class="form-group">
 <label for="jumlah_pintu">Nama</label>
 <input type="text" name="jumlah_pintu" class="form-control" id="jumlah_pintu" ariadescribedby="jumlah_pintu" >
 </div>
 <div class="form-group">
 <label for="berat">Jurusan</label>
 <input type="berat" name="berat" class="form-control" id="berat" ariadescribedby="berat" >
 </div>
 <div class="form-group">
 <label for="warna">warna</label>
 <input type="warna" name="warna" class="form-control" id="warna" ariadescribedby="warna" >
 </div>
 <div class="form-group">
 <label for="harga">harga</label>
 <input type="harga" name="harga" class="form-control" id="harga" ariadescribedby="harga" >
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
 </div>
@endsection