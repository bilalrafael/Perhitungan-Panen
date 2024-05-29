<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', UserController::class);
Route::get('/jagung', [UserController::class,'jagung'])->name('jagung');
Route::get('/terong', [UserController::class,'terong'])->name('terong');
Route::get('/cabai', [UserController::class,'cabai'])->name('cabai');
Route::get('/form', [UserController::class,'form'])->name('form');
Route::post('/tambahData', [UserController::class,'tambahData'])->name('tambahData');
Route::get('/detail/{id}', [UserController::class,'detail'])->name('detail');
Route::delete('/delete/{id}', [UserController::class,'delete'])->name('delete');
// metode nya get lalu masukkan namespace AuthController 
// attribute name merupakan penamaan dari route yang kita buat
// kita tinggal panggil fungsi route(name) pada layout atau controller
// Route::get('/', [AuthController::class,'index'])->name('login');
// Route::get('/login', [AuthController::class,'index'])->name('login');
// Route::get('register', [AuthController::class,'register'])->name('register');
// Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
// Route::get('logout', [AuthController::class,'logout'])->name('logout');

// Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses_register');
// Route::post('reg_petugas', [AuthController::class,'reg_petugas'])->name('reg_petugas');
// Route::get('/admin/pintubelakang', [AdminController::class,'registrasi'])->name('registrasi');
// kita atur juga untuk middleware menggunakan group pada routing
// didalamnya terdapat group untuk mengecek kondisi login
// jika user yang login merupakan admin maka akan diarahkan ke AdminController
// jika user yang login merupakan user biasa maka akan diarahkan ke UserController

// Route::group(['middleware' => ['auth']], function () {
//     Route::group(['middleware' => ['cek_login:admin']], function () {
        
//     });
//     Route::group(['middleware' => ['cek_login:user']], function () {
//         Route::get('/user/pinjam/{id}', [UserController::class,'pinjam_buku'])->name('pinjam_buku');
//         Route::get('/user/detail/{id}', [UserController::class,'detail'])->name('detail');
//         Route::post('/user/peminjaman', [UserController::class,'peminjaman'])->name('peminjaman');
//         Route::resource('/user', UserController::class);
//     });
// });