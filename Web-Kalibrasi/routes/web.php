<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\homecontroller;
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