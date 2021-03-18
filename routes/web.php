<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Brands\TPC\TPC;
use App\Http\Controllers\Brands\TCC\TCC;
use App\Http\Controllers\Brands\SW\SW;
use App\Http\Controllers\Brands\KK\KK;
use App\Http\Controllers\Brands\DQ\DQ;
use App\Http\Controllers\Brands\BBQ\BBQ;
use App\Http\Controllers\Users\Users;
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
Route::group(['prefix'=>'brands'],function(){
    Route::get('/tpc/tpc', [TPC::class, 'index']);
    Route::get('/tcc/tcc', [TCC::class, 'index']);
    Route::get('/sw/sw', [SW::class, 'index']);
    Route::get('/dq/dq', [DQ::class, 'index']);
    Route::get('/bbq/bbq', [BBQ::class, 'index'])->name('bbq');
    Route::get('/kk/kk', [KK::class, 'index']);
});
Route::get('/usr/usr',[Users::class, 'index']);