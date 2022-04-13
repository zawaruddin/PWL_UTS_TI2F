@extends('aldi_07.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header"> Tambah Kendaraan Umum </div>
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
                <form method="post" action="{{route('aldi_07.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label> <br>
                        <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="roda">Roda</label> <br>
                        <input type="text" name="roda" class="form-control" id="roda" aria-describedby="roda">
                    </div>
                    <div class="form-group">
                        <label for="nomor">Nomor</label> <br>
                        <input type="text" name="nomor" class="form-control" id="nomor" aria-describedby="nomor">
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis</label> <br>
                        <input type="text" name="jenis" class="form-control" id="jenis"
                            aria-describedby="jenis">
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun</label> <br>
                        <input type="text" name="tahun" class="form-control" id="tahun" aria-describedby="tahun">
                    </div>
                    <div class="form-group">
                        <label for="merk">Merk</label> <br>
                        <input type="text" name="merk" class="form-control" id="merk" aria-describedby="merk">
                    </div>
                    <div class="form-group">
                        <label for="muatan">Muatan</label> <br>
                        <input type="text" name="muatan" class="form-control" id="muatan" aria-describedby="muatan">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-success" href="{{route('aldi_07.index')}}"> Kembali </a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
