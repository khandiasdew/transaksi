<?php

use App\Http\Controllers\barang;
use App\Http\Controllers\detailTransaksi;
use App\Http\Controllers\kategori;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\transaksi;
use App\Http\Controllers\user;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::resource([
    // '/barang' => barang::class,
    // '/kategori' => kategori::class,
    // '/transaksi' => transaksi::class,
    // '/detailTransaksi' => detailTransaksi::class,
    // '/user' => user::class,
// ]);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth'])->group(function(){
    Route::resource('user', user::class);
    Route::get('/kategori/{kategori}/delete' , [kategori::class , 'delete']);
    Route::resource('barang', barang::class);
    Route::get('/barang/{barang}/delete' , [barang::class , 'delete']);
    Route::resource('kategori', kategori::class);
    Route::get('/transaksi/{transaksi}/delete' , [transaksi::class , 'delete']);
    Route::resource('transaksi', transaksi::class);
    Route::get('/member/{member}/delete' , [MemberController::class , 'delete']);
    Route::resource('member', MemberController::class);
});
