<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route yang sudah ada
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Rute untuk produk
Route::get('/produk', [ProdukController::class, 'ViewProduk'])->name('produk.index');
Route::get('/produk/add', [ProdukController::class, 'ViewAddproduk'])->name('produk.create');
Route::post('/produk', [ProdukController::class, 'CreateProduk'])->name('produk.store');
Route::get('/produk/{kode_produk}/edit', [ProdukController::class, 'ViewEditProduk'])->name('produk.edit');
Route::put('/produk/{kode_produk}', [ProdukController::class, 'UpdateProduk'])->name('produk.update');
Route::delete('/produk/{kode_produk}', [ProdukController::class, 'DeleteProduk'])->name('produk.delete');
