@extends('zalfa_21.layout')

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
            <form method="post" action="{{ route('ProdukSnack.update', $ProduckSnack->id) }}" id="myForm">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="{{ $ProduckSnack->nama }}" ariadescribedby="Nama" >
                </div>
                <div class="form-group">
                    <label for="Merk">Merk</label>
                    <input type="text" name="merk" class="form-control" id="Merk" value="{{ $ProduckSnack->merk }}" ariadescribedby="Merk" >
                </div>
                <div class="form-group">
                    <label for="Jenis">Jenis</label>
                    <input type="text" name="jenis" class="form-control" id="jenis" value="{{ $ProdukSnack->jenis }}" ariadescribedby="Jenis" >
                </div>
                <div class="form-group">
                    <label for="Berat">Berat</label>
                    <input type="text" name="berat" class="form-control" id="Berat" value="{{ $ProdukSnack->berat }}" ariadescribedby="Berat" >
                </div>
                <div class="form-group">
                    <label for="Harga">Harga</label>
                    <input type="text" name="harga" class="form-control" id="Harga" value="{{ $ProdukSnack->harga }}" ariadescribedby="Harga" >
                </div>
                <div class="form-group">
                    <label for="Expired_Date">Expired Date</label>
                    <input type="date" name="expired_date" class="form-control" id="Expired_Date" value="{{ $ProdukSnack->expired_date }}" ariadescribedby="Expired_Date" >
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection 