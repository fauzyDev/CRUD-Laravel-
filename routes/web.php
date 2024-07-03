<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProdukController;
use JetBrains\PhpStorm\Internal\ReturnTypeContract;

// use App\Models\Categoribarang;
// use App\Models\Barang;
// use App\Models\User;
// use App\Models\Transaction; 

Route::get('/login',[LoginController::class,'index'])->name('login');

Route::get('/register',[LoginController::class,'register']);

Route::post('/register',[LoginController::class,'daftar']);

//menampilkan halaman login
Route::post('/login',[LoginController::class,'login']);

Route::post('/logout',[LoginController::class,'logout'])->name('logout');

//menampilkan dashboard
        Route::middleware(['admin'])->group(function(){
Route::get('/dashboard',[LoginController::class,'dashboard'])->middleware('auth');

// Route::get('/', function(){
//         return view('master.kerangkauser');
// });

//Menu kiri profil
Route::get('/profil',[LoginController::class,'profil'])->middleware('auth');

// menampilkan menu kategori barang
// Route::get('/kategoriproduk',function(){
//     return view('kategoriproduk');[
//         'kategoriproduk' => Categoribarang::all()
//     ];
// });

//Menu kiri kategori produk
Route::resource('/kategoriproduk',CategoryProductController::class)->middleware('auth');

//Menu kiri produk
Route::resource('/produk',ProdukController::class)->middleware('auth');

//Menu kiri user
Route::resource('/user',UserController::class)->middleware('auth');

//Menu kiri transaksi
Route::resource('/transaksi',TransaksiController::class)->middleware('auth');

Route::resource('/detailproduk', GaleriController::class)->only('store','destroy');
});

Route::get('/', [PenggunaController::class,'kerangka_user']);
Route::get('/produkdetail/{id}', [UserProdukController::class, 'Detail']);

// Route::get('/', function(){
//         return view('master.kerangkauser');
// });
