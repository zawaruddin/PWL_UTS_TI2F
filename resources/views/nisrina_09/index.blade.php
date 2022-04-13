@extends('nisrina_09.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>DAFTAR AKSESORIS PAKAIAN</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('aksesoris.create') }}">Input Aksesoris Pakaian</a>
            </div>
        </div>
    </div>
    <!-- Kode untuk form pencarian -->
    <form class="form" method="get" action="{{ route('search') }}">
        <div class="form-group w-100 mb-3">
            <label for="search" class="d-block mr-2">Pencarian</label>
            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan Kata Kunci">
            <button type="submit" class="btn btn-primary mb-1">Cari</button>
        </div>
    </form>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Aksesoris</th>
            <th>Harga</th>
            <th>Stok</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($aksesoris as $aks)
        <tr>
            <td>{{ $aks->kode_barang }}</td>
            <td>{{ $aks->nama }}</td> 
            <td>{{ $aks->harga }}</td>
            <td>{{ $aks->stok }}</td>  
            <td>
                <form action="{{ route('aksesoris.destroy',['aksesoris'=>$aks->id]) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('aksesoris.show',$aks->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('aksesoris.edit',$aks->id) }}">Edit</a>
                    

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>                  
                </form>
            </td> 
        </tr>
        @endforeach
    </table>
    <div class="d-flexs">
        {{ $aksesoris->links() }}
    </div>
@endsection