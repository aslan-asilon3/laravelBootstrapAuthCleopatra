<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\SocialSharingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('instagram', [InstagramController::class,'index']);


Route::get('socialsharing', [SocialSharingController::class,'index']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/login', [LoginController::class, 'index'])->name('login');


Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


Route::get('user/home', [HomeController::class, 'userHome'])->name('user.home');

