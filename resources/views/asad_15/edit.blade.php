@extends('karyawan.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">Edit Laryawan</div>
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
                <form method="post" action="{{ route('karyawan.update', $Karyawan->nama) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $Karyawan->nama }}" ariadescribedby="Nama">
                    </div>
                    <div class="form-group">
                        <label for="Jabatan">Jabatan</label>
                        <input type="text" name="Jabatan" class="form-control" id="Jabatan" value="{{ $Karyawan->jabatan }}" ariadescribedby="Jabatan">
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <input type="text" name="Alamat" class="form-control" id="Alamat" value="{{ $Karyawan->alamat }}" ariadescribedby="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="Hp">No Hp</label>
                        <input type="text" name="Hp" class="form-control" id="Hp" value="{{ $Karyawan->hp }}" ariadescribedby="Hp">
                    </div>
                    <button type="submit" class="btn btnprimary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection