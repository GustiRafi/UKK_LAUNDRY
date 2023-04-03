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

Route::middleware('auth')->group(function(){
    Route::resource('/account',App\Http\Controllers\userController::class);
    Route::resource('/outlet', App\Http\Controllers\outletController::class);
    Route::resource('/membership', App\Http\Controllers\memberController::class);
    Route::resource('/paket', App\Http\Controllers\paketController::class);
});
