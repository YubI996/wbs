<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome2');
});

Auth::routes();

Route::get('/home', [
    HomeController::class, 'index'
])->name('home');
route::get('/test', function () {
    return view('statistik');
});

route::post( '/files',[App\Http\Controllers\FileController::class, 'store']);

Route::resource('users', App\Http\Controllers\userController::class);

Route::resource('jenisAduans', App\Http\Controllers\JenisAduanController::class);

Route::resource('jenisAduans', App\Http\Controllers\JenisAduanController::class);

Route::resource('jenisAduans', App\Http\Controllers\JenisAduanController::class);

Route::resource('aduans', App\Http\Controllers\AduanController::class);

Route::resource('roles', App\Http\Controllers\roleController::class);

Route::resource('jenisAduans', App\Http\Controllers\jenis_aduanController::class);

Route::get('ekspor', [App\Http\Controllers\AduanController::class,'export']);