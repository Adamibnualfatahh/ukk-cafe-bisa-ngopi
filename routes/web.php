<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// halaman Depan 
Route::get('/','App\Http\Controllers\TransactionController@index');
// Dashboard Menu
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard','App\Http\Controllers\ProductController@index',function (){
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->resource('/product', ProductController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/destroy/{id}', 'App\Http\Controllers\ProductController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/product/edit/{id}', 'App\Http\Controllers\ProductController@edit');
Route::middleware(['auth:sanctum', 'verified'])->put('dashboard/product/update/{id}', 'App\Http\Controllers\ProductController@update');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/transaksi','App\Http\Controllers\TransactionController@dash_transaksi',function (){
})->name('transaksi');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/laporan','App\Http\Controllers\LaporanController@index',function (){
})->name('laporan');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/log','App\Http\Controllers\LogActivityController@dash_log',function (){
})->name('log');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboards', function () {
    return view('dashboard');
})->name('dashboards');


// Kasir
Route::get('/kasir','App\Http\Controllers\TransactionController@kasir');
