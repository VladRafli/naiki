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

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('pesan/{id}', 'App\Http\Controllers\PesanController@index');
Route::post('pesan/{id}', 'App\Http\Controllers\PesanController@pesan');
Route::get('check-out', 'App\Http\Controllers\PesanController@check_out');
Route::get('check-out-delete', 'App\Http\Controllers\PesanController@check_out_delete');
Route::delete('check-out/{id}', 'App\Http\Controllers\PesanController@delete')->name('home');
Route::get('/search', 'App\Http\Controllers\searchController@index')->name('home');

// Route::get('pesan')

// Route::get('konfirmasi-check-out', 'App\Http\Controllers\PesanController@konfirmasi');