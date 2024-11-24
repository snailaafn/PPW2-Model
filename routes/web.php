<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MahasiswaController;


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


Route::get('/book', [BukuController::class, 'index'])->name('buku.index');
Route::get('/book/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/book', [BukuController::class, 'store'])->name('buku.store');
Route::delete('/book/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');
Route::get('/book/edit/{id}', [BukuController::class, 'edit'])->name('buku.edit');
Route::put('/book/{id}', [BukuController::class, 'update'])->name('buku.update');
// Route::get('/book/search', BukuController:@search)->name('buku.search');


Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store-regis', 'store')->name('store-regis');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
   });

Route::get('/send-mail', [SendEmailController::class,'index'])->name('kirim-email');
Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');
Route::resource('gallery', GalleryController::class);

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
Route::post('/gallery', [GalleryController::class, 'store'])->name('gallery.store');
Route::delete('/gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
Route::get('/gallery/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
Route::put('/gallery/{id}', [GalleryController::class, 'update'])->name('gallery.update');

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
