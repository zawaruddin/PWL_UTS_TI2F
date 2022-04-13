@extends('nesa_10.layout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>DAFTAR ANGGOTA PERPUSTAKAAN</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('10.create') }}"> Input Anggota</a>
            </div>
            <form action="/10">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="search" value="{{ request('')}}">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>
    

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
       
    <table class="table table-bordered">
        <tr>
            <th style="text-align: center">ID Anggota</th>
            <th style="text-align: center">Nama Anggota</th>
            <th style="text-align: center">Nomor Telepon</th>
            <th style="text-align: center">Alamat</th>
            <th style="text-align: center">Jenis Kelamin</th>
            <th width="280px" style="text-align: center">Action</th>
        </tr>
        @foreach ($anggota_perpustakaans as $agt)
        <tr>
       
            <td>{{ $agt ->id_anggota }}</td>
            <td>{{ $agt ->nama_anggota }}</td>
            <td>{{ $agt ->nomor_telepon }}</td>
            <td>{{ $agt ->alamat }}</td>
            <td>{{ $agt ->jenis_kelamin }}</td>
            <td>
                <form action="{{ route('nesa_10.destroy',['anggota_perpustakaans'=>$agt->nim]) }}" method="POST">
       
                    <a class="btn btn-info" href="{{ route('10.show',$mhs->nim) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('10.edit',$mhs->nim) }}">Edit</a>
                
                    @csrf
                    @method('DELETE')
                
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        {{ $anggota_perpustakaans->links() }}
    </div>
@endsection