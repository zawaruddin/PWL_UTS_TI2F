@extends('aliyya_22.layout')

@section('content')
<div class="row">
    <div class="col-md-12 text-center mt-4">
        <h2>Daftar Data Motor</h2>
    </div>
    <div class="col-md-12 mt-4">
        <div class="float-right my-2 mt-4 mb-4">
            <a class="btn btn-primary" href="{{route('motor.create')}}">Input Data</a>
        </div>

        <!-- <div class="float-left my-4">
            <form class="form" method="get" action="{{ route('search') }}">
                <div class="input-group">
                    <input type="search" name="search" class="form-control mr-3 rounded" placeholder="Masukkan Keyword" aria-label="Search" aria-describedby="search-addon" />
                    <button type="submit" class="btn btn-outline-success">Search</button>
                </div>
            </form>
        </div> -->

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        @endif
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID Motor</th>
                <th scope="col">Nama Motor</th>
                <th scope="col">Merk Motor</th>
                <th scope="col">Transmisi</th>
                <th scope="col">Warna</th>
                <th scope="col">Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($motor as $m)
            <tr>
                <td>{{$m->id_motor}}</td>
                <td>{{$m->nama_motor}}</td>
                <td>{{$m->merk_motor}}</td>
                <td>{{$m->transmisi}}</td>
                <td>{{$m->warna_motor}}</td>
                <td>{{$m->harga}}</td>
                <td>
                    <form action="{{route('motor.destroy',$m->id_motor)}}" method="POST">
                        <a class="btn btn-info" href=" {{route('motor.show',$m->id_motor)}}" class="btn btn-info">Show</a>
                        <a class="btn btn-primary" href=" {{route('motor.edit',$m->id_motor)}}" class="btn btn-info">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $motor->links() }}
</div>
@endsection