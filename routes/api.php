<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/books', App\Http\Controllers\Api\BookApiController::class);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']); // Get all data
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show']); // Get single data
Route::post('/mahasiswa', [MahasiswaController::class, 'store']); // Create data
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']); // Update data
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy']); // Delete data
