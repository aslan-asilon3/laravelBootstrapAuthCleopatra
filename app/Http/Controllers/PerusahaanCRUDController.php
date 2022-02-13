<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;
use Yajra\DataTables\Services\DataTable;
//use config\datatables;
// use Datatables;
// use config\datatables;

class PerusahaanCRUDController extends Controller
{
    //
    public function index()
{
if(request()->ajax()) {
return datatables()->of(Perusahaan::select('*'))
->addColumn('action', 'perusahaans.action')
->rawColumns(['action'])
->addIndexColumn()
->make(true);
}

// public function index(Request $request)
// {
//  if ($request->ajax()) {
//  $data = Perusahaan::latest()->get();
//  return Datatables::of($data)
//  ->addIndexColumn()
//  ->addColumn('action', function($row){

//  $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

//  return $btn;
// })
// ->rawColumns(['action'])
// ->make(true);
// }

return view('contoh.Perusahaans.index');
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('contoh.Perusahaans.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$request->validate([
'name' => 'required',
'email' => 'required',
'address' => 'required'
]);
$perusahaan = new Perusahaan;
$perusahaan->name = $request->name;
$perusahaan->email = $request->email;
$perusahaan->address = $request->address;
$perusahaan->save();
return redirect()->route('perusahaans.index')
->with('success','Perusahaan has been created successfully.');
}
/**
* Display the specified resource.
*
* @param  \App\company  $company
* @return \Illuminate\Http\Response
*/
public function show(Perusahaan $perusahaan)
{
return view('Perusahaans.show',compact('perusahaan'));
} 
/**
* Show the form for editing the specified resource.
*
* @param  \App\Company  $company
* @return \Illuminate\Http\Response
*/
public function edit(Perusahaan $perusahaan)
{
return view('Perusahaans.edit',compact('perusahaan'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\company  $company
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$request->validate([
'name' => 'required',
'email' => 'required',
'address' => 'required'
]);
$perusahaan = Perusahaan::find($id);
$perusahaan->name = $request->name;
$perusahaan->email = $request->email;
$perusahaan->address = $request->address;
$perusahaan->save();
return redirect()->route('perusahaans.index')
->with('success','Perusahaan Has Been updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\Company  $company
* @return \Illuminate\Http\Response
*/
public function destroy(Request $request)
{
$com = Perusahaan::where('id',$request->id)->delete();
return Response()->json($com);
}
}
