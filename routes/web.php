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
route::get('/statistik',[App\Http\Controllers\StatistikController::class, 'data']);

route::post( '/files',[App\Http\Controllers\FileController::class, 'store']);
route::post( '/files/verif',[App\Http\Controllers\FileController::class, 'store_verif']);
route::post( '/files/inspektur',[App\Http\Controllers\FileController::class, 'store_inspek']);

Route::resource('users', App\Http\Controllers\userController::class);

Route::resource('jenisAduans', App\Http\Controllers\JenisAduanController::class);

Route::resource('aduans', App\Http\Controllers\AduanController::class);

Route::resource('roles', App\Http\Controllers\roleController::class);

Route::get('ekspor', [App\Http\Controllers\AduanController::class,'export']);
Route::get('aduans/file/{name}/{id}', [App\Http\Controllers\AduanController::class,'download'])->name('aduans.download');
// Route::get('aduans/file/verif/\{id}', [App\Http\Controllers\AduanController::class,'download_verif'])->name('aduans.download.verif');
Route::patch('aduans/verif/{id}', [App\Http\Controllers\AduanController::class,'verif'])->name('aduans.verif');
Route::patch('aduans/inspek/{id}', [App\Http\Controllers\AduanController::class,'inspek'])->name('aduans.inspek');
Route::patch('aduans/hasil/{id}', [App\Http\Controllers\AduanController::class,'admin'])->name('aduans.hasil');