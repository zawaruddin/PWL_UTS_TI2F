@extends('aldi_07.layout')

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
                <form method="post" action="{{ route('aldi_07.update', $kendaraanUmum->id)}}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{$kendaraanUmum->nama}}"
                            ariadescribedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="roda">Roda</label>
                        <input type="text" name="roda" class="form-control" id="roda" value="{{$kendaraanUmum->roda}}"
                            ariadescribedby="roda">
                    </div>
                    <div class="form-group">
                        <label for="nomor">Nomor</label>
                        <input type="nomor" name="nomor" class="form-control" id="nomor"
                            value="{{$kendaraanUmum->nomor}}" ariadescribedby="nomor">
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis</label>
                        <input type="jenis" name="jenis" class="form-control" id="jenis"
                            value="{{$kendaraanUmum->jenis}}" ariadescribedby="jenis">
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="tahun" name="tahun" class="form-control" id="tahun"
                            value="{{$kendaraanUmum->tahun}}" ariadescribedby="tahun">
                    </div>
                    <div class="form-group">
                        <label for="merk">Merk</label>
                        <input type="merk" name="merk" class="form-control" id="merk" value="{{$kendaraanUmum->merk}}"
                            ariadescribedby="merk">
                    </div>
                    <div class="form-group">
                        <label for="muatan">Muatan</label>
                        <input type="muatan" name="muatan" class="form-control" id="muatan"
                            value="{{$kendaraanUmum->muatan}}" ariadescribedby="muatan">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-success" href="{{route('aldi_07.index')}}"> Kembali </a>
            </div>
            //
            </form>
        </div>
    </div>
</div>
@endsection
