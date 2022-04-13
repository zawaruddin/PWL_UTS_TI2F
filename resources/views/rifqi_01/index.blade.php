@extends('rifqi_01.layout')

@section('title', 'index')

@section('content')
<style>
    .table {
        margin: 0 auto;
    }
</style>
<div class="container-fluid">
    <h3 class="text-center">Tas</h3>
    <div class="container mt-5">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success</strong> {{session('success')}}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-dange alert-dismissible fade show" role="alert">
                <strong>Error!</strong> {{session('error')}}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <a href="{{ route('tas.create') }}" class="btn btn-primary">Create Tas</a>
        <br><br>
        <table class="table table-hover" width=100%>
            <thead class=" bg-primary text-white">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tas as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jenis }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>
                                <a href="{{ route('tas.show', [$item->id]) }}" class="btn btn-primary text-white rounded-pill"><span>Show</span></a>
                                <a href="{{ route('tas.edit', [$item->id]) }}" class="btn btn-info text-white rounded-pill"><span>Edit</span></a>
                                <a href="{{ route('delete', [$item->id]) }}" class="btn btn-danger text-white rounded-pill" onclick="return confirm('Apakah Anda Yakin ?');"><span>Delete</span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection