@extends('layouts.appContoh')

@section('title', 'produk contoh Edit')

@section('content')


<div class="row my-3">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <div class="card-header bg-primary">
        <h3 class="text-light fw-bold">Edit Pproduk contoh</h3>
      </div>
      <div class="card-body p-4">
        <form action="/produkcontoh/{{ $produkcontoh->id }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="my-2">
            <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{ $post->title }}" required>
          </div>

          <div class="my-2">
            <input type="text" name="category" id="category" class="form-control" placeholder="Category" value="{{ $post->category }}" required>
          </div>

          <div class="my-2">
            <input type="file" name="file" id="file" accept="image/*" class="form-control">
          </div>

          <img src="{{ asset('storage/images/'.$post->image) }}" class="img-fluid img-thumbnail" width="150">

          <div class="my-2">
            <textarea name="content" id="content" rows="6" class="form-control" placeholder="Post Content" required>{{ $post->content }}</textarea>
          </div>

          <div class="my-2">
            <input type="submit" value="Update Post" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection