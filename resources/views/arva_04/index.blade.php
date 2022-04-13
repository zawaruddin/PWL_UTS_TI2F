@extends('rumah.layout') @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Perumahan Arva</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">

        <form class="form" method="get" action="{{ route('search') }}">
            <div class="form-group w-100 mb-3">
                <label for="search" class="d-block mr-2">Pencarian</label>
                <input type="text" name="search" class="form-control w-75 d-inline" id="search"
                    placeholder="Masukkan Keyword">
                <button type="submit" class="btn btn-primary mb-1">Cari</button>
            </div>
        </form>
        <tr>
            <th>Type</th>
            <th>Blok</th>
            <th>Harga</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($rumahs as $Rumah)
            <tr>

                <td>{{ $Rumah->Type }}</td>
                <td>{{ $Rumah->Blok }}</td>
                <td>{{ $Rumah->Harga }}</td>
                <td>
        @endforeach
    </table>

    {{ $Rumah->links() }}
@endsection
