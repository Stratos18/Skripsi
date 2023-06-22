<?php

use App\Http\Controllers\alatstandarcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\kalibrasicontroller;
use App\Http\Controllers\profilcontroller;

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

Route::get('/', function () {
    return view('page/login');
});
Route::get('/home',[homecontroller::class,'home'])->name('home');

Route::get('/login',[logincontroller::class,'login'])->name('login');
Route::post('/submitlogin',[logincontroller::class,'submitlogin'])->name('submitlogin');
Route::get('/logout',[logincontroller::class,'logout'])->name('logout');

Route::get('/pkalibrasi',[kalibrasicontroller::class,'index'])->name('pkalibrasi');
Route::get('/pkalibrasi/finfouut',[kalibrasicontroller::class,'create'])->name('finfo.uut');
Route::post('/pkalibrasi/inputuut',[kalibrasicontroller::class, 'store'])->name('input.uut');
Route::get('/pkalibrasi/inputbaca',[kalibrasicontroller::class, 'masukangka'])->name('input.baca');
Route::post('/pkalibrasi/inputbaca',[kalibrasicontroller::class, 'masukangka'])->name('post.baca');

Route::get('/alatstd',[alatstandarcontroller::class,'alatstandar'])->name('alatstd');
Route::get('/alatstd/formalatstandar',[alatstandarcontroller::class,'create'])->name('formalatstd');
Route::post('/alatstd/postformalatstandar',[alatstandarcontroller::class,'store'])->name('post.alatstnd');
Route::get('/alatstd/hapus/{no_sertifstd}',[alatstandarcontroller::class,'hapus'])->name('hapus.alatstd');

Route::get('/profil',[profilcontroller::class,'profil'])->name('profil');
Route::get('/edit',[profilcontroller::class,'edit'])->name('profile.edit');
Route::put('/update',[profilcontroller::class,'update'])->name('profile.update');