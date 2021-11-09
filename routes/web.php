<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MempelaiPriaController;
use App\Http\Controllers\MempelaiWanitaController;
use App\Http\Controllers\AkadNikahController;
use App\Http\Controllers\ResepsiController;
use App\Http\Controllers\GaleriFotoController;
use App\Http\Controllers\UndanganController;

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
//     return view('undangan');
// });
Route::get('/', [UndanganController::class, 'index'])->name('undangan');

Route::get('/admin', function () {
    return view('home');
});

Route::resource('mempelai-pria', MempelaiPriaController::class);
Route::resource('mempelai-wanita', MempelaiWanitaController::class);
Route::resource('akad-nikah', AkadNikahController::class);
Route::resource('resepsi', ResepsiController::class);
Route::resource('galeri-foto', GAleriFotoController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
