@extends('karyawan.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>KARYAWAN JTI</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Karyawan</a>
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
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($karyawan as $kyw)
    <tr>
        <td>{{ $kyw ->nama }}</td>
        <td>{{ $kyw ->jabatan }}</td>
        <td>{{ $kyw ->alamat }}</td>
        <td>{{ $kyw ->hp }}</td>
        <td>
            <form action="{{ route('karyawan.destroy',['karyawan'=>$kyw->nama]) }}" method="POST">
            <a class="btn btn-info" href="{{ route('karyawan.show',$kyw->nama) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('karyawan.edit',$kyw->nama) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btndanger">Delete</button>
        </form>
    </td>
</tr>
@endforeach
</table>
@endsection