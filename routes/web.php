<?php

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

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//kategori
Route::get('/admin/kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('adminkategori');
Route::post('/admin/kategori', [App\Http\Controllers\KategoriController::class, 'store'])->name('kategoriTambah');
Route::delete('/admin/kategori/{id}', 'KategoriController@destroy');
// Route::delete('/admin/kategori/{id}', [App\Http\Controllers\KategoriController::class, 'destroy']);

//berita
Route::get('/admin/berita', [App\Http\Controllers\BeritaController::class, 'index'])->name('adminberita');
