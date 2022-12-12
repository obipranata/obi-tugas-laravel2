@extends('templates')

@section('content')
  <div class="container mt-5">
    <a href="{{route('artikel.index')}}" class="btn btn-success mb-3">List</a>
    <div class="row">
      <div class="col-lg-10">
        <div class="card mb-3">
          <img src="{{Storage::url($artikel->foto)}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$artikel->judul}}</h5>
            <p class="card-text"><?= $artikel->isi ?></p>
            <p class="card-text"><small class="text-muted">{{$artikel->created_at}}</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection