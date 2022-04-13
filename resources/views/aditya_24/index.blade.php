@extends('aditya_24.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('webnya.create') }}"> Input Mahasiswa</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


<!-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <form action="{{ url('search') }}" method="get">
                <div class="form-group row">
                    <div class="col-md-6">
                        <input value="{{ request('search') }}" type="text" name="search" class="form-control" placeholder="Search">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div> -->


<table class="table table-bordered">
    <tr>
        <th>Merek</th>
        <th>Jumlah Pintu</th>
        <th>Berat</th>
        <th>Warna</th>
        <th>Harga</th>
        
        <th width="280px">Action</th>
    </tr>
    @foreach ($Lemari_Es as $mhs)
    <tr>
        <td>{{ $mhs ->merek }}</td>
        <td>{{ $mhs ->jumlah_pintu }}</td>
        <td>{{ $mhs ->berat }}</td>
        <td>{{ $mhs ->warna }}</td>
        <td>{{ $mhs ->harga }}</td>
        <td>
        <form action="{{ route('webnya.show',['webnya'=>$mhs->id_lemaries]) }}" method="POST">
            <a class="btn btn-info" href="{{ route('webnya.show',$mhs->id_lemaries) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('webnya.edit',$mhs->id_lemaries) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </td>
    </tr>
    @endforeach
    </table>
    <div class="d-flex">
        {{ $Lemari_Es->links() }}
    </div>
@endsection