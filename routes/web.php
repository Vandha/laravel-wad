<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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
//     return view('landingpage');
// });

Route::get('/', MahasiswaController::class.'@index')->name('index');

// Route::get('/laravel', function () {
//     return view('welcome');
// })->name('welcome');

Route::get('/dashboard', function () {
    return view('auth.dashboard');
})->name('dashboard');

Route::get('/gagal', function () {
    return view('home');
})->name('gagal');

Auth::routes();
// Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
