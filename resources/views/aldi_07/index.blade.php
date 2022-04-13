@extends('aldi_07.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2 text-center">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <br><br>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{route('aldi_07.create')}}"> Input Mahasiswa</a>
            </div>
        </div>
    </div>

    @if($message=Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Roda</th>
            <th>Nomor</th>
            <th>Jenis</th>
            <th>Tahun</th>
            <th>Merk</th>
            <th>Muatan</th>
            <th width="300px">Action</th>
        </tr>
        @foreach ($kendaraanUmum as $ku)
        <tr>
            <td>{{$ku->id}}</td>
            <td>{{$ku->nama}}</td>
            <td>{{$ku->roda}}</td>
            <td>{{$ku->nomor}}</td>
            <td>{{$ku->jenis}}</td>
            <td>{{$ku->tahun}}</td>
            <td>{{$ku->merk}}</td>
            <td>{{$ku->muatan}}</td>
            <td>
                <form action="{{route('aldi_07.destroy',$kendaraanUmum->id)}}" method="POST">
                    <a href="{{route('aldi_07.show',$kendaraanUmum->id)}}" class="btn btn-secondary">Show</a>
                    <a href="{{route('aldi_07.edit',$kendaraanUmum->id)}}" class="btn btn-info">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
            {{-- perhatikan script di bawah ini untuk membuat paginasi dan yang berkaitan dengan paginasi  --}}
        {{-- Current Page: {{ $mahasiswas->currentPage() }}<br>
        Jumlah Data: {{ $mahasiswas->total() }}<br>
        Data perhalaman: {{ $mahasiswas->perPage() }}<br> --}}
        <br><br>


        {{-- <nav aria-label="Page navigation example">
            <div class="pagination justify-content-end">
                {!! $mahasiswas->links() !!}
            </div>
        </nav> --}}


@endsection

