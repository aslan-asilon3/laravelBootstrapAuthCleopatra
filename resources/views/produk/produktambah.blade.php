@extends('layouts.appAdmin')

@section('content')
<div class="container">
<h2>Tambah data</h2>


<form action="{{ route('produk.store') }}" method="POST" >
  <div class="card-body">
    <div class="form-group">
    <label for="exampleInputEmail1">Produk Kode</label>
    <input type="text" name="produk_kode" class="form-control"  placeholder="kode produk">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Produk Nama</label>
    <input type="text" name="produk_nama" class="form-control"  placeholder="Enter email">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Produk Harga</label>
    <input type="number" name="produk_harga" class="form-control"  placeholder="Enter email">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Produk Jumlah</label>
    <input type="number" name="produk_jumlah" class="form-control"  placeholder="Enter email">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Produk Deskripsi</label>
    <input type="text" name="produk_deskripsi" class="form-control"  placeholder="Enter email">
    </div>
    <div class="form-group">
    <label for="exampleInputFile">Gambar Produk</label>
    <div class="input-group">
    <div class="custom-file">
    <input type="file"name="produk_gambar" class="custom-file-input" id="exampleInputFile">
    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
    </div>
    <div class="input-group-append">
    <span class="input-group-text">Upload</span>
    </div>
    </div>
    </div>
    <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    </div>

    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>


@endsection