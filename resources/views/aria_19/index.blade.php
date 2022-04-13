<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Tabel</title>
    </head>
    <body>
        <div class="container">
            <div class="row my-3 text-center">
                <h1>Data Table</h1>
            </div>
            <div class="mb-3 text-center">
                <a href="{{ url("dashboard/create") }}" class="btn btn-primary">
                    Tambah Data
                </a>
            </div>
            @if (session()->has("success")) 
                <div class="col-md-5 mb-3">  
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session("success") }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Warna Barang</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $datasatuan)
                            <tr>
                                <td>{{ $datasatuan->nama }}</td>
                                <td>{{ $datasatuan->warna }}</td>
                                <td>{{ $datasatuan->desc }}</td>
                                <td>Rp. {{ $datasatuan->harga }}</td>
                                <td>
                                    <a href="{{ url("dashboard/$datasatuan->id") }}" class="btn btn-info">Detail</a>
                                    <a href="{{ url("dashboard/$datasatuan->id/edit") }}" class="btn btn-warning mx-2">Edit</a>
                                    <form action="{{ url("dashboard/$datasatuan->id") }}" class="d-inline" method="post">
                                        @csrf
                                        @method("delete")
                                        <button onclick="return confirm('Konfirmasi Hapus')" class="btn btn-danger border-0">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>