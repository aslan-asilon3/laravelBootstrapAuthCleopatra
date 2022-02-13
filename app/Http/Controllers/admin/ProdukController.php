<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    //
    public function index()
    {
        $products = Produk::latest()->paginate(5);
    
        return view('produk.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function create()
    {
        return view('produk.produktambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'produk_kode' => 'required',
            'produk_nama' => 'required',
            'produk_harga' => 'required',
            'produk_jumlah' => 'required',
            'produk_deskripsi' => 'required',
            'produk_gambar' => 'required',
        ]);
    
        Produk::create($request->all());
     
        return redirect()->route('produk.index')
                        ->with('success','Product created successfully.');
    }

    public function show(Produk $produk)
    {
        return view('produk.index',compact('product'));
    } 

    public function destroy(Produk $produk)
    {
        $produk->delete();
    
        return redirect()->route('produk.index')
                        ->with('success','Product deleted successfully');
    }
    
    
}
