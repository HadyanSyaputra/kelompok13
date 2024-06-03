<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Akademik296Controller;
use App\Http\Controllers\Mahasiswa295Controller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/akademik/create', [Akademik296Controller::class, 'create'])->name('akademik.create');
Route::post('/akademik/store', [Akademik296Controller::class, 'store'])->name('akademik.store');
Route::get('/akademik', [Akademik296Controller::class, 'index'])->name('akademik.index');
Route::delete('/akademik/{id}', [Akademik296Controller::class, 'destroy'])->name('akademik.destroy');



Route::get('/mahasiswa/create', [Mahasiswa295Controller::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa/store', [Mahasiswa295Controller::class, 'store'])->name('mahasiswa.store');
Route::get('/akademik', [Mahasiswa295Controller::class, 'index'])->name('mahasiswa.index');
Route::delete('/akademik/{id}', [Mahasiswa295Controller::class, 'destroy'])->name('mahasiswa.destroy');

