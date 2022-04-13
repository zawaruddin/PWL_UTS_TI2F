@extends('zaidan_28.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Smartphone
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
            <form method="post" action="{{ route('hp.store') }}" id="myForm">
            @csrf
                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="Nama" name="Nama" class="form-control" id="Nama" aria-describedby="Nama" >
                </div>
                <div class="form-group">
                    <label for="Penyimpanan">Penyimpanan</label>
                    <input type="Penyimpanan" name="Penyimpanan" class="form-control" id="Penyimpanan" ariadescribedby="Penyimpanan" >
                </div>
                <div class="form-group">
                    <label for="Stok">Stok</label>
                    <input type="Stok" name="Stok" class="form-control" id="Stok" ariadescribedby="Stok" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection