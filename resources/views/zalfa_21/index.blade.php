@extends('zalfa_21.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>DATA PRODUK SNACK TOKO ZALFA' BAROKAH</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('ProdukSnack.create') }}"> Input Produk</a>
            </div>
        </div>
    </div>
    </div>   
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col-md-6">
            <form action="{{ url('/index/search') }}" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search here" name="cari" id="search">
                        <button type="submit" class="btn btn-dark">Search</button>
                    </div>
            </form>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Merk</th>
                                            <th>Jenis</th>
                                            <th>Berat (gr)</th>
                                            <th>Harga (Rp)</th>
                                            <th>Expired Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($ProdukSnack as $ps)
                                        <tr>
                                            <td>{{ $ps->id }}</td>
                                            <td>{{ $ps->nama }}</td>
                                            <td>{{ $ps->merek }}</td>
                                            <td>{{ $ps->jenis }}</td>
                                            <td>{{ $ps->berat }}</td>
                                            <td>{{ $ps->harga }}</td>
                                            <td>{{ $ps->expired_date }}</td>
                                            <td>
                                            <form action="{{ route('ProdukSnack.destroy',['ProdukSnack'=>$ps->id]) }}" method="POST">

                                                <a class="btn btn-info" href="{{ route('ProdukSnack.show',$ps->id) }}">Show</a>
                                                <a class="btn btn-primary" href="{{ route('ProdukSnack.edit',$ps->id) }}">Edit</a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
    <!-- <table class="table table-bordered">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->kelas }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>
            <form action="{{ route('mahasiswa.destroy',['mahasiswa'=>$mhs->nim]) }}" method="POST">

                <a class="btn btn-info" href="{{ route('mahasiswa.show',$mhs->nim) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mhs->nim) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
    @endforeach
    </table> -->
@endsection 
<div class="row justify-content-center mt-5">
            <div class="col-auto">
                {{ $ProdukSnack->links() }}
            </div>
        </div>