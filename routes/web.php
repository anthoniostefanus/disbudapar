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
Route::get('/kontak', function () {
    return view('maps.maps');
});
Route::get('/formulir', function () {
    return view('formulir.main-formulir');
});
Route::get('profile/{berkas}/download', [App\Http\Controllers\ProfileController::class, 'download'])->name('profile.download');
Route::resource('formulirekraf', \App\Http\Controllers\EkrafUserController::class)
    ->middleware('auth');
Route::resource('formulirpariwisata', \App\Http\Controllers\PariwisataUserController::class)
    ->middleware('auth');
Route::resource('pinjaman-kur', \App\Http\Controllers\KurUserController::class)
    ->middleware('auth');
Route::resource('profile', \App\Http\Controllers\ProfileController::class)
    ->middleware('auth');
Route::resource('profile-liat-EKRAF', \App\Http\Controllers\ProfileEkrafController::class)
    ->middleware('auth');
Route::get('profile-liat-EKRAF/{berkas}/download', [App\Http\Controllers\ProfileEkrafController::class, 'download'])->name('profile-liat-EKRAF.download')
    ->middleware('auth');
Route::resource('profile-liat-KUR', \App\Http\Controllers\ProfileKURController::class)
    ->middleware('auth');
Route::get('profile-liat-KUR/{berkas}/download', [App\Http\Controllers\ProfileKURController::class, 'download'])->name('profile-liat-KUR.download')
    ->middleware('auth');
Route::get('profile-liat-KUR/{berkas}/download1', [App\Http\Controllers\ProfileKURController::class, 'download1'])->name('profile-liat-KUR.download1')
    ->middleware('auth');
Route::resource('profile-liat-PAR', \App\Http\Controllers\ProfilePARController::class)
    ->middleware('auth');
Route::get('profile-liat-PAR/{berkas}/download', [App\Http\Controllers\ProfilePARController::class, 'download'])->name('profile-liat-PAR.download')
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
Route::group(['middleware' => ['auth','ceklevel:Admin']],function() {  
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::resource('users', \App\Http\Controllers\UserController::class);
Route::resource('ekraf', \App\Http\Controllers\EkrafController::class)
    ->middleware('auth');
Route::resource('pariwisata', \App\Http\Controllers\PariwisataController::class)
    ->middleware('auth');
Route::resource('kur', \App\Http\Controllers\KurController::class)
    ->middleware('auth');
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
Route::get('ekraf/{berkas}/download', [App\Http\Controllers\EkrafController::class, 'download'])->name('ekraf.download');
Route::get('pariwisata/{berkas}/download', [App\Http\Controllers\PariwisataController::class, 'download'])->name('pariwisata.download');
Route::get('kur/{berkas}/download', [App\Http\Controllers\kurController::class, 'download'])->name('kur.download');
Route::get('kur/{berkas}/download1', [App\Http\Controllers\kurController::class, 'download1'])->name('kur.download1');
});
Route::group(['middleware' => ['auth','ceklevel:Bri']],function() {  
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::resource('kur', \App\Http\Controllers\KurController::class)
    ->middleware('auth');
Route::get('/data', [App\Http\Controllers\DatadiriController::class, 'index'])->name('home');
Route::get('kur/{berkas}/download', [App\Http\Controllers\kurController::class, 'download'])->name('kur.download');
Route::get('kur/{berkas}/download1', [App\Http\Controllers\kurController::class, 'download1'])->name('kur.download1');
});