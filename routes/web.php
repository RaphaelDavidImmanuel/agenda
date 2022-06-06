<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;

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

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/agenda', [PostController::class, 'index'])->name('agenda');
Route::get('/guru', [GuruController::class, 'index'])->name('guru');
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');

// Route::get('/login.html', [PostController::class, 'index'])->name('login.html');


Route::get('/tambahagenda', [PostController::class, 'create'])->name('tambahagenda');
Route::post('/insertdata', [PostController::class, 'store'])->name('insertdata');
Route::get('/tampilan/{id}', [PostController::class, 'tampilan']);
Route::put('/updatedata/{id}', [PostController::class, 'update'])->name('updatedata');

Route::delete('/deletedata/{id}', [PostController::class, 'destroy'])->name('deletedata');

// guru

// akhir guru

// kelas

// akhir kelas


