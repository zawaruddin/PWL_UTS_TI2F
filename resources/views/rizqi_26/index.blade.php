<html>
    <head>

    </head>
    <body>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Products</h2>
                    </div><br>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('barang.create') }}"> Create New Product</a><br><br>
                    </div>
                </div>
            </div>
        
        
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        
        
            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>stock</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($data as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->nama }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->harga_beli }}</td>
                    <td>{{ $product->harga_jual }}</td>
                    <td>
                            <a class="btn btn-primary" href="{{ route('barang.edit',$product->id) }}">Edit</a>
                            <form action="/barang/{{$product->id}}" method="POST" class="remove-record-model  d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                       
                    </td>
                </tr>
                @endforeach
            </table>
        
        
            {!! $data->links() !!}
        
        </div>
        </div>
    </body>
</html>