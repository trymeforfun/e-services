<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

// order jasa
Route::get('/dashboard', [ServicesController::class, 'get_customers'])->name('dashboard');
Route::post('/post-customer', [ServicesController::class, 'post_customer']);
Route::get('/edit-customer/{id}', [ServicesController::class, 'edit_customer']);
Route::get('/create-customer', [ServicesController::class, 'create_customer']);
Route::post('/delete-customer/{id}', [ServicesController::class, 'delete_customer']);


// pembayaran
Route::get('/pembayaran', [ServicesController::class, 'get_pembayaran'])->name('pembayaran');
Route::post('/post-pembayaran', [ServicesController::class, 'post_pembayaran']);
Route::get('/edit-pembayaran/{id}', [ServicesController::class, 'edit_pembayaran']);
Route::get('/create-pembayaran', [ServicesController::class, 'create_pembayaran']);
Route::post('/delete-pembayaran/{id}', [ServicesController::class, 'delete_pembayaran']);



// penjemputan
Route::get('/penjemputan', [ServicesController::class, 'get_penjemputan'])->name('penjemputan');
Route::post('/post-penjemputan', [ServicesController::class, 'post_penjemputan']);
Route::get('/edit-penjemputan/{id}', [ServicesController::class, 'edit_penjemputan']);
Route::get('/create-penjemputan', [ServicesController::class, 'create_penjemputan']);
Route::post('/delete-penjemputan/{id}', [ServicesController::class, 'delete_penjemputan']);




// pengembalian
Route::get('/pengembalian', [ServicesController::class, 'get_pengembalian'])->name('pengembalian');
Route::post('/post-pengembalian', [ServicesController::class, 'post_pengembalian']);
Route::get('/edit-pengembalian/{id}', [ServicesController::class, 'edit_pengembalian']);
Route::get('/create-pengembalian', [ServicesController::class, 'create_pengembalian']);
Route::post('/delete-pengembalian/{id}', [ServicesController::class, 'delete_pengembalian']);



// pengerjaan
Route::get('/pengerjaan', [ServicesController::class, 'get_pengerjaan'])->name('pengerjaan');
Route::post('/post-pengerjaan', [ServicesController::class, 'post_pengerjaan']);
Route::get('/edit-pengerjaan/{id}', [ServicesController::class, 'edit_pengerjaan']);
Route::get('/create-pengerjaan', [ServicesController::class, 'create_pengerjaan']);
Route::post('/delete-pengerjaan/{id}', [ServicesController::class, 'delete_pengerjaan']);




// laporan
Route::get('/laporan', [ServicesController::class, 'get_laporan'])->name('laporan');
Route::post('/print-laporan', [ServicesController::class, 'print_laporan']);






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
