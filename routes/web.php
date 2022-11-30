<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfileController;
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

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('profile/add', [ProfileController::class, 'create']);
Route::post('profile', [ProfileController::class, 'store']);

Route::get('profile/{id}/edit', [ProfileController::class, 'edit']);
Route::put('profile/{id}', [ProfileController::class, 'update']);

// Route::delete('profile/{id}', [ProfileController::class, 'destroy']);

Route::post('profile/hapus',[ProfileController::class,'hapus']);



Route::get('/berita', [BeritaController::class, 'index']);

Route::get('berita/add', [BeritaController::class, 'create']);
Route::post('berita', [BeritaController::class, 'store']);

Route::get('berita/{id}/edit', [BeritaController::class, 'edit']);
Route::put('berita/{id}', [BeritaController::class, 'update']);

// Route::delete('berita/{id}', [BeritaController::class, 'destroy']);

Route::post('berita/hapus',[BeritaController::class,'hapus']);

Route::post('berita/edit',[BeritaController::class,'edit']);


// Route::get('/berita', [BeritaController::class, 'index']);


Route::get('/kontak', [KontakController::class, 'index']);

Route::get('kontak/add', [KontakController::class, 'create']);
Route::post('kontak', [KontakController::class, 'store']);

Route::get('kontak/{id}/edit', [KontakController::class, 'edit']);
Route::put('kontak/{id}', [KontakController::class, 'update']);

// Route::delete('kontak/{id}', [KontakController::class, 'destroy']);
Route::post('kontak/hapus',[KontakController::class,'hapus']);
