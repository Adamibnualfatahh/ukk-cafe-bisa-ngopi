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

Route::get('/','App\Http\Controllers\TransactionController@index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard','App\Http\Controllers\TransactionController@dash_home',function (){
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/transaksi','App\Http\Controllers\TransactionController@dash_transaksi',function (){
})->name('transaksi');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/laporan','App\Http\Controllers\TransactionController@dash_laporan',function (){
})->name('laporan');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/log','App\Http\Controllers\TransactionController@dash_log',function (){
})->name('log');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboards', function () {
    return view('dashboard');
})->name('dashboards');
