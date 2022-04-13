@extends('windo_03.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>DAFTAR DATA SEKOLAH</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('sekolah.create') }}">Tambah Data Sekolah</a>
            </div>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th>NPSN</th>
            <th>Nama Sekolah</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($sekolah as $Sekolah)
        <tr>
            <td>{{ $Sekolah->NPSN }}</td>
            <td>{{ $Sekolah->nama_sekolah }}</td>
            <td>{{ $Sekolah->alamat }}</td>
            <td>{{ $Sekolah->no_telepon }}</td>
            <td>
            <form action="{{ route('sekolah.destroy',$Sekolah->NPSN) }}" method="POST">
                <a class="btn btn-info" href="{{ route('sekolah.show',$Sekolah->NPSN) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('sekolah.edit',$Sekolah->NPSN) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
                </tr>
    @endforeach
    </table>
@endsection