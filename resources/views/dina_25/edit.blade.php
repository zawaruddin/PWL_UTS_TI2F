@extends('dina_25.master.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit Laptop
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('laptop.update', $laptop->id) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="Merk">Merk</label>
                        <input type="text" name="merk" class="form-control" id="Merk" value="{{ $laptop->merk }}" aria-describedby="Merk" >
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="numeric" name="harga" class="form-control" id="Harga" value="{{ $laptop->harga }}" aria-describedby="Harga" >
                    </div>
                    <div class="form-group">
                        <label for="email">Processor</label>
                        <input type="text" name="processor" class="form-control" id="processor" value="{{ $laptop->processor }}" aria-describedby="Processor" >
                    </div>
                    <div class="form-group">
                        <label for="Ram">Ram</label>
                        <input type="text" name="ram" class="form-control" id="Ram" value="{{ $laptop->ram }}" aria-describedby="Ram" >
                    </div>
                    <div class="form-group">
                        <label for="Penyimpanan">Penyimpanan</label>
                        <input type="text" name="penyimpanan" class="form-control" value="{{ $laptop->penyimpanan }}" id="penyimpanan" aria-describedby="Penyimpanan" >
                    </div>
                    <div class="form-group">
                        <label for="alamat">Sistem Operasi</label>
                        <textarea class="form-control" name="os" id="os" rows="3">{{ $laptop->os }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection