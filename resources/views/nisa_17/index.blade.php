@extends('mahasiswa.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Tampilan Data TV</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('tv.create') }}"> Input Data</a>
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
        <th>Merk</th>
        <th>Jenis</th>
        <th>Ukuran</th>
        <th>Warna</th>
        <th>Harga</th>
        <th>Gambar</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($paginate as $t)
    <tr>
        <td>{{ $t ->merk }}</td>
        <td>{{ $t ->jenis }}</td>
        <td>{{ $t ->ukuran}}</td>
        <td>{{ $t ->warna }}</td>
        <td>{{ $t ->harga }}</td>
        <td>{{ $t ->gambar }}</td>
        <td>
            <form action="{{ route('tv.destroy',['tv'=>$mhs->id]) }}" method="POST">
                <a class="btn btn-info" href="{{ route('tv.show',$t->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('tv.edit',$t->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="d-flex">
    {{ $paginate->links() }}
</div>
@endsection