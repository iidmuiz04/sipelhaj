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

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

Route::resource('jamaah', \App\Http\Controllers\JamaahController::class)
    ->middleware('auth');

Route::resource('pemberkasan', \App\Http\Controllers\PemberkasanController::class)
    ->middleware('auth');

Route::resource('jadwal', \App\Http\Controllers\JadwalController::class)
    ->middleware('auth');

Route::resource('hau', \App\Http\Controllers\HauController::class);