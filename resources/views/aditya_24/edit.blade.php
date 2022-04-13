@extends('aditya_24.layout')

@section('content')

<div class="container mt-5">
    
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Edit Mahasiswa
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
 <form method="post" action="{{ route('webnya.update', $lemaries->id_lemaries) }}" id="myForm">
 @csrf
 @method('PUT')
 <div class="form-group">
 <label for="merek">Nama</label>
 <input type="text" name="merek" class="form-control" id="merek" value="{{ $lemaries->merek }}" aria-describedby="merek" >
 </div>
 <div class="form-group">
 <label for="jumlah_pintu">jumlah pintu</label>
 <input type="jumlah_pintu" name="jumlah_pintu" class="form-control" id="jumlah_pintu" value="{{ $lemaries->jumlah_pintu }}" aria-describedby="jumlah_pintu" >
 </div>
 <div class="form-group">
 <label for="berat">Berat</label>
 <input type="berat" name="berat" class="form-control" id="berat" value="{{ $lemaries->berat }}" ariadescribedby="berat" >
 </div>
 <div class="form-group">
 <label for="warna">Warna</label>
 <input type="text" name="warna" class="form-control" id="warna" value="{{ $lemaries->warna }}" ariadescribedby="warna" >
 </div>
 <div class="form-group">
 <label for="harga">harga</label>
 <input type="text" name="harga" class="form-control" id="harga" value="{{ $lemaries->harga }}" ariadescribedby="harga" >
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
</div>
@endsection