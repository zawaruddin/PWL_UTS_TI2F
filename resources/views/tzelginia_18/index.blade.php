@extends('tzelginia_18.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('tzelginia_18.create') }}"> Input Barang</a>
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
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Merk Barang</th>
        <th>Harga Barang</th>
        <th>Stok Barang</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($supermarket as $sp)
    <tr>
        <td>{{ $sp ->kode_brg }}</td>
        <td>{{ $sp ->nama_brg }}</td>
        <td>{{ $sp ->merk_brg }}</td>
        <td>Rp.{{ $sp ->harga_brg }}</td>
        <td>{{ $sp ->stok_brg }}</td>
        <td>
            <form action="{{ route('tzelginia_18.destroy',['tzelginia_18'=>$sp->id]) }}" method="POST">
                <a class="btn btn-info" href="{{ route('tzelginia_18.show',$sp->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('tzelginia_18.edit',$sp->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection