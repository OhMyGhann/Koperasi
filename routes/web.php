<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\DataPeminjamController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PinjamNasabahController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/admin/nasabah', [HomeController::class, 'nasabah']);
Route::get('/admin/pinjam', [PinjamController::class, 'index'])->name('dashboard');
Route::get('/admin/data-nasabah', [DataPeminjamController::class, 'index'])->name('data-peminjam');
Route::get('/admin/data-peminjam', [PinjamNasabahController::class, 'index'])->name('peminjaman-nasabah');
Route::get('/admin/data/create', [DataPeminjamController::class, 'create'])->name('create-peminjam');
Route::get('/admin/data/create-peminjam', [PinjamNasabahController::class, 'create'])->name('create-peminjaman');
Route::post('/admin/data/simpan', [DataPeminjamController::class, 'store'])->name('simpan-peminjam');
Route::post('/admin/data/simpan-peminjam', [PinjamNasabahController::class, 'store'])->name('simpan-peminjaman');
Route::get('/admin/data/edit/{id}', [DataPeminjamController::class, 'edit'])->name('edit-peminjam');
Route::put('/admin/data/edit/{id}', [DataPeminjamController::class, 'update'])->name('edit-peminjam');

Route::get('/admin/data/delete/{id}', [DataPeminjamController::class, 'destroy'])->name('delete-peminjam');

Route::get('/mark-as-read/{notification}', 'NotificationController@markAsRead')->name('notification.markAsRead');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);

});


