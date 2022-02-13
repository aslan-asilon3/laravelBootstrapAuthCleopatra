<?php

namespace App\Http\Controllers\contoh;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProdukContoh;

class ProdukContohController extends Controller
{

    public function index()
    {
        //
        $produkcontohs = ProdukContoh::orderBy('id', 'desc')->paginate(3);
        return view('contoh/produkcontoh/index', ['produkcontohs' => $produkcontohs]);
    }

    public function create()
    {
        //
        return view('contoh.produkcontoh.create');
    }


    public function store(Request $request) {
        $request->validate([
          'title' => 'required',
          'category' => 'required',
          'content' => 'required|min:1',
          'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName = time() . '.' . $request->file->extension();
        // $request->image->move(public_path('images'), $imageName);
        $request->file->storeAs('public/images', $imageName);
    
        $produkcontohData = ['title' => $request->title, 'category' => $request->category, 'content' => $request->content, 'image' => $imageName];
    
        ProdukContoh::create($produkcontohData);
        return redirect('/produkcontoh')->with(['message' => 'Post added successfully!', 'status' => 'success']);
      }


    public function show(ProdukContoh $produkcontoh) {
        return view('contoh.produkcontoh.show', ['produkcontoh' => $produkcontoh]);
      }

    public function edit(Produkcontoh $produkcontoh) {
        return view('contoh.produkcontoh.edit', ['produkcontoh' => $produkcontoh]);
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
