@extends('layouts.appContoh')

@section('title', 'produk contoh show')

@section('content')
  <h2>Produk contoh show</h2>


  <div class="row my-4">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <img src="{{ asset('storage/images/'.$produkcontoh->image) }}" class="img-fluid card-img-top">
      <div class="card-body p-5">
        <div class="d-flex justify-content-between align-items-center">
          <p class="btn btn-dark rounded-pill">{{ $produkcontoh->category }}</p>
          <p class="lead">{{ \Carbon\Carbon::parse($produkcontoh->created_at)->diffForHumans() }}</p>
        </div>

        <hr>
        <h3 class="fw-bold text-primary">{{ $produkcontoh->title }}</h3>
        <p>{{ $produkcontoh->content }}</p>
      </div>
      <div class="card-footer px-5 py-3 d-flex justify-content-end">
        <a href="/produkcontoh/{{$produkcontoh->id}}/edit" class="btn btn-success rounded-pill me-2">Edit</a>
        <form action="/produkcontoh/{{$produkcontoh->id}}" method="produkcontoh">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger rounded-pill">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>

    
@endsection