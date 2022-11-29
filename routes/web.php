<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;



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

Route::controller(BlogController::class)->group(function(){
    Route::get('/blog', 'home');
    Route::get('/tentang', 'tentang');
    Route::get('/kontak', 'kontak');
});

Route::controller(PegawaiDBController::class)->group(function(){
    Route::get('/pegawai', 'index');
    Route::get('/pegawai/tambah','tambah');
    Route::post('/pegawai/store','store');
    Route::get('/pegawai/edit/{id}', 'edit');
    Route::post('/pegawai/update', 'update');
    Route::get('/pegawai/hapus/{id}', 'hapus');
});
