<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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


Route::get('/book', [BukuController::class, 'index']);
Route::get('/book/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/book', [BukuController::class, 'store'])->name('buku.store');
Route::delete('/book/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');
Route::get('/book/edit/{id}', [BukuController::class, 'edit'])->name('buku.edit');
Route::put('/book/{id}', [BukuController::class, 'update'])->name('buku.update');
// Route::get('/book/search', BukuController:@search)->name('buku.search');



