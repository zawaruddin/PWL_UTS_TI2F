@extends('dina_25.master.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2 text-center">
            <h2>Data Laptop Rifa Store</h2>
        </div>
        <form action="{{ route('laptop.search') }}" class="mt-4" method="get">
            @csrf
            <div class="row flex-row">
                <div class="col-md-4">
                    <div class="input-group">    
                        <input type="text" name="search" class="form-control" placeholder="Merk/Harga/Sistem Operasi" aria-label="Username" aria-describedby="basic-addon1">
                        <div class="input-group-append">
                            <input type="submit" value="Cari" class="btn btn-secondary" id="searchnich"></input>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="float-right my-2">
                        <a class="btn btn-success" href="{{ route('laptop.create') }}"> Input Laptop</a>
                    </div>
                </div>                     
            </div>
        </form>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
@if ($message = Session::get('error'))
<div class="alert alert-error">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>Merk</th>
        <th>Harga</th>
        <th>Processor</th>
        <th>Ram</th>
        <th>Penyimpanan</th>
        <th>Sistem Operasi</th>
        <th width="280px">Action</th>
    </tr>
@foreach ($laptops as $laptop)
    <tr>
        <td>{{ $laptop->merk }}</td>
        <td>Rp. {{ $laptop->harga }}</td>
        <td>{{ $laptop ->processor }}</td>
        <td>{{ $laptop ->ram }}</td>
        <td>{{ $laptop ->penyimpanan }}</td>
        <td>{{ $laptop ->os }}</td>
        <td>
            <form action="{{ route('laptop.destroy',['mahasiswa',$laptop->id]) }}" method="POST">
                <a class="btn btn-info" href="{{ route('laptop.show',$laptop->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('laptop.edit',$laptop->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
@endforeach
</table>
<div class="d-flex justify-content-center">
 {{ $laptops->links() }}
</div>
@endsection