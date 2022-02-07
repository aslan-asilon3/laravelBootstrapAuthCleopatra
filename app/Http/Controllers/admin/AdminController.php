<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\User;

class AdminController extends Controller
{
    //


    public function index();
    {
       $users = User::all();
       // $user = User::find($id);
        

        //$products= Product::all();
        //return view('products.index',compact('products', 'users'));  

        return view('admin.AdminHome',compact('users'));  
    }
}
