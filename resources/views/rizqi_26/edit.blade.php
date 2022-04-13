<html>
    <head>

    </head>
    <body>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Update Product</h2>
                    </div><br>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('barang.index') }}"> Back</a><br><br>
                    </div>
                </div>
            </div>
        
        
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
        
        
            <form action="{{ route('barang.update',$barang->id) }}" method="POST">
                @csrf
                @method('PUT')
                 <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="nama" class="form-control" value={{$barang->nama}} placeholder="Nama Barang" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Stock:</strong>
                            <input type="number" name="stock" class="form-control" value={{$barang->stock}} placeholder="Stock Barang" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Harga Beli:</strong>
                            <input type="text" name="harga_beli" class="form-control" value={{$barang->harga_beli}} placeholder="Harga Beli" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Harga Jual:</strong>
                            <input type="text" name="harga_jual" class="form-control" value={{$barang->harga_jual}} placeholder="Harga Jual" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <br>
                            <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
        
        
            </form>
        </div>
    </body>
</html>