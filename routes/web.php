<?php

use App\Http\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\User\PelangganController;
use App\Http\Controllers\Admin\DataProdukController;

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


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route CRUD
    Route::get('/tambahdata', function (){
        return view('crud/tambah');
    })->name('tambahdata');

// route halaman utama
    Route::get('/', function () {
        return view('index');
    });
    Route::get('/tentang', function () {
        return view('tentang');
    });

//auth 
    Auth::routes();

// multiuser
    Route::get('admin/dashboard', function(){
        return view('admin/dashboard');
    })->middleware('CheckRole:admin');
    Route::get('pelanggan/index', function(){
        return view('pelanggan/index');
    })->middleware(['CheckRole:user,admin']);

//route admin
    Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'CheckRole:admin']], function(){

    Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/dashboard', function () {
        return view('admin/dashboard');});
    Route::get('/dataproduk', [DataProdukController::class, 'index']);
    Route::get('/pelanggan', [PelangganController::class, 'index']);
});

//route pelanggan
Route::group(['middleware' => ['CheckRole:user']], function(){

    Route::get('/produk', function () {
        return view('pelanggan/produk');});
    Route::get('/detailproduk', function () {
        return view('pelanggan/detailproduk');});
    Route::get('/benih', function () {
        return view('pelanggan/benih');});
    Route::get('/pestisida', function () {
        return view('pelanggan/pestisida');});
    Route::get('/insektisida', function () {
        return view('pelanggan/insektisida');});
    Route::get('/pesanan', function () {
        return view('pelanggan/pesanan');});
    Route::get('/checkout', function () {
        return view('pelanggan/checkout');});
    Route::get('/profil', function () {
        return view('pelanggan/profileuser');});
    Route::get('/cart', function () {
       return view('pelanggan/cart');});
    });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
