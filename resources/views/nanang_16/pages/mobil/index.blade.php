@extends('nanang_16.layouts.app')
@section('title','Index')
@section('content')
<div class="container-fluid pt-4">
    <h4 class="text-center"> UTS</h4>
    <div class="d-flex justify-content-between">
        <h6 class="text-center fw-bold">Mobil Nanang_16</h6>
        <a href="{{ route('mobil.create') }}" class="btn btn-sm btn-success text-white">Add Mobil</a>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
    <table class="table table-bordered table-hover mt-2 text-center">
        <thead class="bg-success text-white">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Merek</th>
                <th scope="col">Warna</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($datas as $data)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->brand }}</td>
                <td>{{ $data->warna }}</td>
                <td>{{ $data->total }}</td>
                <td class="col-2 ">
                    <a href="{{route('mobil.edit',[$data->id])}}" type="submit"
                        class="d-inline btn btn-outline-primary" label="edit"><span> <i class="fa-solid fa-pen-to-square"></i></span></a>
                    <form action="{{ route('mobil.destroy', [$data->id]) }}" method="POST" class="d-inline ">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class=" btn btn-outline-danger" onclick="return confirm('Apakah anda ingin menghapus item.?'); event.preventDefault();
                                                        document.getElementById('delete-item').submit();"><span><i class="fa-solid fa-trash"></i></span></button>
                    </form>
                </td>
            </tr>
            @empty
            <p><strong>Empety Table</strong></p>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
