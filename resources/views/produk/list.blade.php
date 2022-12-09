<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Daftar Produk</title>
  </head>
  <body>
    
    <div class="container mt-5">
      <a href="{{route('produk.store')}}" class="btn btn-success mb-3">Tambah Produk</a>
      <h2 class="text-center">Data Produk</h2>
      @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert" style="width: 60%">
          <strong>{{ $message }}</strong>
        </div>
      @endif
        <div class="row">
          @foreach ($produk as $p)
            <div class="col-lg-4 mb-4">
              <div class="card" >
                <img src="{{Storage::url($p->file)}}" class="card-img-top" alt="..." style="max-height: 500px">
                <div class="card-body">
                  <h5 class="card-title">{{$p->nama}}</h5>
                  <h6 class="card-subtitle mb-2 text-success">IDR. {{number_format($p->harga)}}</h6>
                  <p class="card-text">{{$p->ukuran}}</p>
                  <p class="card-text">{{$p->deskripsi}}</p>
                  <a href="{{route('produk.detail', $p->id)}}" class="btn btn-primary">Detail</a>
                  <a href="{{route('produk.destroy', $p->id)}}" class="btn btn-danger">Hapus</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>