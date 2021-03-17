<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TPC\TPC;
use App\Http\Controllers\TCC\TCC;
use App\Http\Controllers\SW\SW;
use App\Http\Controllers\KK\KK;
use App\Http\Controllers\DQ\DQ;
use App\Http\Controllers\BBQ\BBQ;
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
Route::get('/tpc/tpc', [TPC::class, 'index'])->name('tpc');
Route::get('/tcc/tcc', [TCC::class, 'index'])->name('tcc');
Route::get('/sw/sw', [SW::class, 'index'])->name('sw');
Route::get('/dq/dq', [DQ::class, 'index'])->name('dq');
Route::get('/bbq/bbq', [BBQ::class, 'index'])->name('bbq');
Route::get('/kk/kk', [KK::class, 'index'])->name('kk');
