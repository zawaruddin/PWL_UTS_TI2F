@extends('nanang_16.layouts.app')
@section('title','Create mobil')

@section('content')
<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-body">
            <div class="card-head">
                <h5><span><a href="{{ route('mobil.index')}}"><i
                                class="fa-solid fa-circle-left text-success"></i></a></span> Edit Mobil</h5>
            </div>
            <div class="row">
                <form action="{{route('mobil.update',$mobil->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row mb-2">
                        <div class="col-6">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" value={{$mobil->nama}} id="name" name="nama" required>
                            <small class="text-danger" id="error_name"></small>
                        </div>
                        <div class="col-6">
                            <label for="exampleInputPassword1" class="form-label">Brand</label>
                            <input type="text" class="form-control" id="brand" value={{$mobil->brand}} name="brand" required>
                            <small class="text-danger" id="error_brand"></small>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-6">
                            <label for="exampleInputPassword1" class="form-label">Mesin</label>
                            <input type="text" class="form-control" value={{$mobil->mesin}} id="brand" name="mesin" required>
                            <small class="text-danger" id="error_brand"></small>
                        </div>
                        <div class="col-6">
                            <label for="exampleInputPassword1" class="form-label">Harga</label>
                            <input type="text" class="form-control" value={{$mobil->harga}} id="brand" name="harga" required>
                            <small class="text-danger" id="error_brand"></small>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-6">
                                <label for="exampleInputPassword1" class="form-label">Warna</label>
                                <input type="text" class="form-control" id="warna" value={{$mobil->warna}} name="warna" required>
                                <small class="text-danger" id="error_brand"></small>
                        </div>
                        <div class="col-6">
                            <label for="exampleInputPassword1" class="form-label">Total</label>
                            <input type="text" class="form-control" id="brand" value={{$mobil->total}} name="total" required>
                            <small class="text-danger" id="error_brand"></small>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
