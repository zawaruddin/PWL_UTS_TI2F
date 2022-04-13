@extends('iqri_12.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit Barang
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
                <form method="post" action="{{ route('elektronik.update', $Mahasiswa->id) }}" id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $Mahasiswa->nama }}" aria-describedby="Nama" >
                </div>
                <div class="form-group">
                    <label for="Merk">Merk</label>
                    <input type="text" name="Merk" class="form-control" id="Merk" value="{{ $Mahasiswa->merk }}" aria-describedby="Merk" >
                </div>             

                <div class="form-group">
                    <label for="Harga">Harga</label>
                    <input type="Harga" name="Harga" class="form-control" id="Harga" value="{{ $Mahasiswa->harga }}" aria-describedby="Harga" >
                </div>
                <div class="form-group">
                    <label for="Suplier">Suplier</label>
                    <input type="Suplier" name="Suplier" class="form-control" id="Suplier" value="{{ $Mahasiswa->suplier }}" aria-describedby="Suplier" >
                </div>
                
                <div class="form-group">
                    <label for="Tanggal_Beli">Tanggal Beli</label>
                    <input type="Tanggal_Beli" name="Tanggal_Beli" class="form-control" id="Tanggal_Beli" value="{{ $Mahasiswa->tanggal_beli }}" aria-describedby="Tanggal_Beli" >
                </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection