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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/verify', [App\Http\Controllers\VerifyController::class, 'getVerify'])->name('getverify');
Route::post('/verify', [App\Http\Controllers\VerifyController::class, 'postVerify'])->name('verify');

// Route::get('/verify','VerifyController@getVerify')->name('getverify');
// Route::post('/verify','VerifyController@postVerify')->name('verify');
