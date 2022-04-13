@extends('wazir_23.layout')
@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">
            Tambah Pesanan
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
                <form method="post" action="{{ route('mesin.store') }}" id="myForm">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label for="totalcucian">Total Cucian</label>
                    <input type="number" class="form-control" name="totalcucian" id="totalcucian" placeholder="Masukkan Total Cucian">
                </div>
                <div class="form-group">
                    <label for="status">deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukkan Status">
                </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
