<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Register as admin
Route::post('/register-admin', [AdminController::class, 'registerAsAdmin'])->name('register-admin');
// Login as admin
Route::post('/login-admin', [AdminController::class, 'loginAsAdmin'])->name('login-admin');

// Ke halaman admin
Route::get('/adminpage', [AdminController::class, 'index'])->name('adminpage');
Route::get('/loginToAdmin', [AdminController::class, 'loginToAdmin'])->name('loginToAdmin');
Route::get('/registerAdmin', [AdminController::class, 'registerAdmin'])->name('registerAdmin');
Route::get('/pesananAdmin', [AdminController::class, 'pesananAdmin'])->name('pesananAdmin');
// Konfirmasi dari Admin
Route::post('/konfirmasi/{id}', [AdminController::class, 'konfirmasi'])->name('konfirmasi');

// Ke halaman Pesan
Route::get('/pesan', [PesananController::class, 'index'])->name('pesan');
// Memesan makanan
Route::post('/pesan', [PesananController::class, 'store'])->name('pesan');




