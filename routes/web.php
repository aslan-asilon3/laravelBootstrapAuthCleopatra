<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\SocialSharingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\admin\ProdukController;
use App\Http\Controllers\contoh\ProdukContohController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CatatanHutangController;
use App\Http\Controllers\CompanyCRUDController;
use App\Http\Controllers\PerusahaanCRUDController;
use App\Http\Controllers\UserYajra;


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

Route::get('/logout', function () {
    return view('home');
});



/// admin/produk
// Route::get('/produk',[ProdukController::class,'produk'])->name('produk.index');
// Route::get('produk/tambah',[ProdukController::class,'create']);
// Route::get('produk/hapus',[ProdukController::class,'destroy'])->name('produk.hapus');

Route::resource('produk', ProdukController::class);


// produk contoh
Route::resource('produkcontoh', ProdukContohController::class);

// crudcontoh1
Route::get('employee/', [EmployeeController::class, 'index'])->name('employee.index');
Route::post('employee/store', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('employee/fetchall', [EmployeeController::class, 'fetchAll'])->name('employee.fetchAll');
Route::delete('employee/delete', [EmployeeController::class, 'delete'])->name('employee.delete');
Route::get('employee/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::post('employee/update', [EmployeeController::class, 'update'])->name('employee.update');


// catatan-hutang
Route::get('/catatan-hutang', [CatatanHutangController::class, 'index'])->name('catatan-hutang.index');


/// contoh CRUD 1 - company
Route::resource('companies', CompanyCRUDController::class);



/// contoh CRUD 2 -perusahaan
Route::resource('perusahaans', PerusahaanCRUDController::class);
Route::post('delete-perusahaan', [PerusahaanCRUDController::class,'destroy']);


// contoh CRUD 3 - user yajra
//Route::resource("useryajra", [UserYajra::class]);
Route::get("useryajra", [UserYajra::class, "users"])->name('useryajra.index');
Route::get("useryajra/create", [UserYajra::class, "create"])->name('useryajra.create');
Route::post("useryajra/store", [UserYajra::class, "store"])->name('useryajra.store');