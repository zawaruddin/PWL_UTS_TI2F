@extends('wazir_23.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Toko Mesin Cuci Barokah</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('mesin.create') }}"> Input Pesanan</a>
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
        <th width="80px">Total Cucian</th>
        <th>Deskripsi</th>
        <th>Action</th>
    </tr>
    @foreach ($mesincuci as $mesin)
    <tr>
        <td>{{ $mesin ->nama }}</td>
        <td>{{ $mesin ->totalcucian }}Kg</td>
        <td>{{ $mesin ->deskripsi }}</td>
        <td>
            <form action="{{ route('mesin.destroy',$mesin->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('mesin.edit',$mesin->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('yakin mau menghapus pesanan')">Delete</button>
            </td>
    </tr>
    @endforeach
    </table>
    <div class="d-flex">
        {{ $mesincuci->links() }}
    </div>
@endsection