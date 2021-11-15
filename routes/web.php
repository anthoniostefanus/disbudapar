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

Route::get('/', [App\Http\Controllers\HomeUserController::class, 'index']);

Route::get('/home', function () {
    return view('dashboard');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/kontak', function () {
    return view('maps.maps');
});
Route::get('/formulir', function () {
    return view('formulir.main-formulir');
});
Route::resource('formulirekraf', \App\Http\Controllers\EkrafUserController::class)
    ->middleware('auth');

Route::resource('formulirpariwisata', \App\Http\Controllers\PariwisataUserController::class)
->middleware('auth');
Route::resource('pinjaman-kur', \App\Http\Controllers\KurUserController::class)
->middleware('auth');

Route::get('/pinjaman', function () {
    return view('formulir.pinjaman-kur');
});
Route::get('/loginadmin', function () {
    return view('vendor.adminlte.auth.login');
});

Route::get('/ekraf', [App\Http\Controllers\EkrafController::class, 'index'])->name('home');


Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


Route::get('/beranda', [App\Http\Controllers\HomeController::class, 'user'])->name('beranda');
Route::get('/beranda', [App\Http\Controllers\BerandaUserController::class, 'index'])->name('beranda');

Route::group(['middleware' => ['auth','ceklevel:Admin']],function(){  
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::resource('users', \App\Http\Controllers\UserController::class)
->middleware('auth');

Route::get('/ekraf', [App\Http\Controllers\EkrafController::class, 'index'])->name('home');
Route::get('/pariwisata', [App\Http\Controllers\PariwisataController::class, 'index'])->name('home');
Route::get('/data', [App\Http\Controllers\DatadiriController::class, 'index'])->name('home');
Route::resource('beritaekraf', \App\Http\Controllers\BeritaEkrafController::class)
    ->middleware('auth');
Route::resource('beritapariwisata', \App\Http\Controllers\BeritaPariwisataController::class)
    ->middleware('auth');
Route::resource('beritasalatiga', \App\Http\Controllers\BeritaSalatigaController::class)
    ->middleware('auth');
Route::resource('kritiksaran', \App\Http\Controllers\KritiksaranController::class)
    ->middleware('auth');
Route::resource('vidio', \App\Http\Controllers\VidioController::class)
    ->middleware('auth');
Route::resource('datadiri', \App\Http\Controllers\DatadiriController::class)
    ->middleware('auth');
});