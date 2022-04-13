@extends('firdaus_05.layout')
@section('content')
    <div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left mt-2">
    <h2>TOKO MEBEL FIRDAUS</h2>
    </div>
    <div class="float-right my-2">
    <a class="btn btn-success" href="{{ route('mebel.create') }}"> Input Mebel</a>
    </div>
    </div>
    </div>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
    <p>{{ $message }}</p>
    </div>
    @endif
    
    <table class="table table-bordered">
    <tr>
    <th>Kode</th>
    <th>Nama</th>
    <th>Jenis</th>
    <th>Harga</th>
    <th width="280px">Action</th>
    </tr>
    @foreach ($mebel as $mbl)
    <tr>
    
    <td>{{ $mbl ->nim }}</td>
    <td>{{ $mbl ->nama }}</td>
    <td>{{ $mbl ->kelas }}</td>
    <td>{{ $mbl ->jurusan }}</td>
    <td>
    <form action="{{ route('mebel.destroy',['mebel'=>$mbl->kode]) }}" method="POST">
    
    <a class="btn btn-info" href="{{ route('mebel.show',$mbl->kode) }}">Show</a>
    <a class="btn btn-primary" href="{{ route('mebel.edit',$mbl->kode) }}">Edit</a>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </td>
    </tr>
    @endforeach
    </table>
@endsection