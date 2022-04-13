@extends('iqri_12.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('elektronik.create') }}"> Input Barang</a>
            </div>
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
<!-- 
    <div class="float-left my-2">
                <form action="/cari" method="GET">
                    <input type="text" name="cari" placeholder="Cari Barang..." value="{{ old('cari') }}">
                    <button type="submit" class="btn btn-dark">Cari</button>
                </form>
            </div> -->
            
    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Merk</th>
            <th>Harga</th>
            <th>Suplier</th>
            <th>Tanggal Beli</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs ->nama }}</td>
            <td>{{ $mhs ->merek }}</td>
            <td>{{ $mhs ->harga }}</td>
            <td>{{ $mhs ->suplier }}</td>
            <td>{{ $mhs ->tanggal_beli }}</td>
            <td>
            <form action="{{ route('elektronik.destroy',['elektronik'=>$mhs->id]) }}" method="POST">
                <a class="btn btn-info" href="{{ route('iqri_12.show',$mhs->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('iqri_12.edit',$mhs->id) }}">Edit</a>
                
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="d-flex">
		<br><br>
			<ul class="nav">
				{{ $mahasiswa->links() }}
			</ul>
            
	</div> 

@endsection
