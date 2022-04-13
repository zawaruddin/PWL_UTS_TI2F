@extends('zaidan_28.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>TOKO HP KOH ACENG</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('hp.create') }}"> Input Smartphone</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    {{-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <form action="{{ url('/data/search') }}" method="get">
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
        </div> --}}

    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Penyimpanan</th>
            <th>Stok</th>
        <th width="280px">Action</th>
        </tr>
        @foreach ($smartphone as $smrt)
        <tr>
       
            <td>{{ $smrt ->nama }}</td>
            <td>{{ $smrt ->penyimpanan }}</td>
            <td>{{ $smrt ->stok }}</td>
            <td>
        {{-- <form action="{{ route('hp.destroy',['smartphone'=>$smrt->id]) }}" method="POST">
       
            <a class="btn btn-info" href="{{ route('hp.show',$smrt->id) }}">Show</a>

            {{-- <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mhs->nim) }}">Edit</a>
            
            <a class="btn btn-warning" href="{{ route('mahasiswa.nilai',$mhs->nim) }}">Nilai</a>
            @csrf
            @method('DELETE')
        
            <button type="submit" class="btn btn-danger">Delete</button>
        </form> --}}
        </td>
        </tr>
        @endforeach
    </table>
    {{-- <div class="d-flex">
        {{ $mahasiswa->links() }}
    </div> --}}
@endsection