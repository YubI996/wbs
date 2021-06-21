<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Flash;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

Route::get('/',[App\Http\Controllers\WelcomeController::class,'index'])->name('welcome');
Route::get('/form-captcha',[App\Http\Controllers\CaptchaController::class,'index']);
Route::post('/form-captcha',[App\Http\Controllers\CaptchaController::class,'submit']);
Route::get('createcaptcha', [App\Http\Controllers\CaptchaController::class,'create']);
Route::post('captcha', [App\Http\Controllers\CaptchaController::class,'captchaValidate']);
Route::get('refreshcaptcha', [App\Http\Controllers\CaptchaController::class,'refreshCaptcha']);
Route::get('cek', [App\Http\Controllers\AduanController::class,'fetch']);

Auth::routes();
Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');
Auth::routes(['verify' => true]);

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    Flash::success('Link verifikasi telah dikirim.');
    return back();
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/home', [
    HomeController::class, 'index'
])->middleware('verified')->name('home')->middleware('verified');
route::get('/statistik',[App\Http\Controllers\StatistikController::class, 'index']);

route::post( '/files',[App\Http\Controllers\FileController::class, 'store']);
route::post( '/files/verif',[App\Http\Controllers\FileController::class, 'store_verif']);
route::post( '/files/inspektur',[App\Http\Controllers\FileController::class, 'store_inspek']);

Route::resource('users', App\Http\Controllers\userController::class);

Route::resource('jenisAduans', App\Http\Controllers\JenisAduanController::class);

Route::resource('aduans', App\Http\Controllers\AduanController::class);

Route::resource('roles', App\Http\Controllers\roleController::class);

Route::get('ekspor', [App\Http\Controllers\AduanController::class,'export'])->name('ekspor');
Route::get('ekspor-all', [App\Http\Controllers\AduanController::class,'export_all'])->name('ekspor-all');
Route::get('aduans/file/{name}/{id}', [App\Http\Controllers\AduanController::class,'download'])->name('aduans.download');
// Route::get('aduans/file/verif/\{id}', [App\Http\Controllers\AduanController::class,'download_verif'])->name('aduans.download.verif');
Route::patch('aduans/verif/{id}', [App\Http\Controllers\AduanController::class,'verif'])->name('aduans.verif');
Route::patch('aduans/inspek/{id}', [App\Http\Controllers\AduanController::class,'inspek'])->name('aduans.inspek');
Route::patch('aduans/hasil/{id}', [App\Http\Controllers\AduanController::class,'admin'])->name('aduans.hasil');
Route::get('aduans/selesai/{id}', [App\Http\Controllers\AduanController::class,'selesai'])->name('aduans.selesai');

