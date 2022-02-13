<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DataTables;

class UserYajra extends Controller
{
    //
    public function users(Request $request) {
        if ($request->ajax()) {
            $data = User::all();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row) {
                           $action_btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                           return $action_btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('contoh.useryajra.index');
    }

    public function create()
    {
    return view('contoh.useryajra.create');
    }

    public function store(Request $request)
    {
    $request->validate([
    'name' => 'required',
    'email' => 'required',
    'password' => 'required',
    'is_admin' => 'required',
    'photo_profile' => 'required'
    ]);
    $company = new User;
    $company->name = $request->name;
    $company->email = $request->email;
    $company->password = $request->password;
    $company->is_admin = $request->is_admin;
    $company->photo_profile = $request->photo_profile;
    $company->save();
    return redirect()->route('useryajra.index')
    ->with('success','Company has been created successfully.');
    }

}
