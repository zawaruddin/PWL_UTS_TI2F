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
            <div class="row mb-3 my-3 text-center">
                <h1>Detail Data</h1>
            </div>
            <div class="my-3 text-center">
                <a class="btn btn-info" href="{{ url("dashboard") }}">Kembali ke Dashboard</a>
                <a class="btn btn-warning mx-3" href="{{ url("dashboard/$datadetail->id/edit") }}">Edit Data</a>
                <form action="{{ url("dashboard/$datadetail->id") }}" class="d-inline" method="post">
                    @csrf
                    @method("delete")
                    <button onclick="return confirm('Konfirmasi Hapus')" class="btn btn-danger">Delete Data</button>
                </form>
            </div>
            <div class="row mb-3 justify-content-center">
                <div class="col-lg-8 p-0 position-relative">
                    <ul class="list-group">
                        <li class="list-group-item active" aria-current="true">{{ $datadetail->nama }}</li>
                        <li class="list-group-item">Warna</li>
                        <li class="list-group-item">{{ $datadetail->warna }}</li>
                        <li class="list-group-item">Deskripsi</li>
                        <li class="list-group-item">{{ $datadetail->desc }}</li>
                        <li class="list-group-item">Harga</li>
                        <li class="list-group-item">{{ $datadetail->harga }}</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>