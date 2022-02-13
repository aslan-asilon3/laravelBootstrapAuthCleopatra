@extends('layouts.appContoh')


@section('title', 'produk contoh')

@section('content')

<a href="{{route('produkcontoh.create')}}">create</a>
  <h2>Produk contoh</h2>
  <div class="container">
@if(session('message'))
<div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
  <strong>{{ session('message') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="row g-4 mt-1">
  @forelse($produkcontohs as $key => $row)
  <div class="col-lg-12">

      <!-- <div class="card shadow">
        <a href="produkcontoh/{{ $row->id }}">
          <img src="{{ asset('storage/images/'.$row->image) }}" style="widht:100px;height:100px;" class="card-img-top img-fluid">
        </a>
        <div class="card-body">
            <div class="card-title fw-bold text-primary h4">{{ $row->title }}</div>
            <p class="btn btn-success rounded-pill btn-sm">{{ $row->category }}</p>
          <p class="text-secondary">{{ Str::limit($row->content, 100) }}</p>
        </div>
      </div> -->

      <table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Title</th>
      <th scope="col">Kategori</th>
      <th scope="col">Konten</th>
      <th scope="col">Image</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{ $row->id }}</th>
      <td>{{ $row->title }}</td>
      <td>{{ $row->category }}</td>
      <td>{{ $row->content }}</td>
      <td>
        <img src="{{ asset('storage/images/'.$row->image) }}" style="widht:50px;height:100px;" class="card-img-top img-fluid">
      </td>
      <td>
                    <a class="btn btn-info" href="{{ route('produkcontoh.show',$produkcontohs->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('produkcontoh.edit',$produkcontohs->id) }}">Edit</a>
 
                    <a class="btn btn-primary" href="{{ route('produkcontoh.destroy',$produkcontohs->id) }}">Delete</a>

      </td>
    </tr>
  </tbody>
</table>

  </div>
  @empty
    <h2 class="text-center text-secondary p-4">No produkcontoh found in the database!</h2>
  @endforelse
  <div class="d-flex justify-content-center my-5">
    {{ $produkcontohs->onEachSide(1)->links() }}
  </div>

</div>

</div>


@endsection