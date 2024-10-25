<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\videoController;
use App\Http\Controllers\daftarController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\unggahController;
use App\Http\Controllers\editProfilController;
use App\Http\Controllers\pengaturanController;

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
    return view('beranda');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/editProfil', function () {
    return view('editProfil');
});

Route::get('/pengatuan', function () {
    return view('pengaturan');
});

Route::get('/unggah', function () {
    return view('unggah');
});

Route::get('/login', [loginController::class, 'index'])->name('login');
// Route::get('/login/create', [loginController::class, 'create']);
Route::post('/login', [loginController::class, 'login']);

Route::get('/daftar', [daftarController::class, 'index'])->name('showDaftarForm');
// Route::get('/daftar/create', [daftarController::class, 'create']);
Route::post('/daftar', [daftarController::class, 'register'])->name('daftar');

Route::get('/video', [videoController::class, 'index'])->name('video');
Route::get('/video/create', [videoController::class, 'create']);
Route::post('/video', [videoController::class, 'store']);

Route::get('/profil', [profilController::class, 'index'])->name('profil');
Route::get('/profil/create', [profilController::class, 'create']);
Route::post('/profil', [profilController::class, 'store']);

Route::get('/pengaturan', [pengaturanController::class, 'index'])->name('pengaturan');
Route::get('/pengaturan/create', [pengaturanController::class, 'create']);
Route::post('/pengaturan', [pengaturanController::class, 'store']);

Route::post('/logout', [loginController::class, 'logout'])->name('logout');

