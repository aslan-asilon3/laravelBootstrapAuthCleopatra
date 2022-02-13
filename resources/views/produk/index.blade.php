@extends('layouts.appAdmin')

@section('title', 'produk')

@section('content')
<div>
  <h2>Produk</h2>
  <a href="{{route('produk.create')}}">Tambah data</a>

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif


                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Jumlah/Qty</th>
                            <th>Gambar</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                          <tr>
                          <td>{{ ++$i }}</td>
                            <td>{{ $product->produk_kode }}</td>
                            <td>{{ $product->produk_nama }}</td>
                            <td>{{ $product->produk_harga }}</td>
                            <td>{{ $product->produk_jumlah }}</td>
                            <td>{{ $product->produk_gambar }}</td>
                            <td>{{ $product->produk_deskripsi }}</td>
                            <td>
                            <form action="{{ route('produk.destroy',$product->id) }}" method="POST">
            
                                <a class="btn btn-info" href="{{ route('produk.show',$product->id) }}">Show</a>
                
                                <a class="btn btn-primary" href="{{ route('produk.edit',$product->id) }}">Edit</a>
            
                                @csrf
                                @method('DELETE')
                
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>


@endsection