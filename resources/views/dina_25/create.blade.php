@extends('dina_25.master.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Data Laptop
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
                <form method="post" action="{{ route('laptop.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="Nama">Merk</label>
                        <input type="text" name="merk" class="form-control" id="merk" aria-describedby="merk" >
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="numeric" name="harga" class="form-control" id="harga" aria-describedby="harga" >
                    </div>
                    <div class="form-group">
                        <label for="Processor">Processor</label>
                        <input type="text" name="processor" class="form-control" id="processor" aria-describedby="processor" >
                    </div>                    
                    <div class="form-group">
                        <label for="Ram">RAM</label>
                        <input type="text" name="ram" class="form-control" id="ram" aria-describedby="ram" >
                    </div>
                    <div class="form-group">
                        <label for="Penyimpanan">Penyimpanan</label>
                        <input type="text" name="penyimpanan" class="form-control" id="penyimpanan" aria-describedby="penyimpanan" >
                    </div>
                    <div class="form-group">
                        <label for="os">Sistem Operasi</label>
                        <input type="text" name="os" class="form-control" id="os" aria-describedby="os" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection