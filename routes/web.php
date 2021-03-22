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
/*Route::group(['prefix'=>'brands'],function(){
    Route::get('/tpc/tpc', [TPC::class, 'index'])->name('tpc');
    Route::get('/tcc/tcc', [TCC::class, 'index'])->name('tcc');
    Route::get('/sw/sw', [SW::class, 'index'])->name('sw');
    Route::get('/dq/dq', [DQ::class, 'index'])->name('dq');
    Route::get('/bbq/bbq', [BBQ::class, 'index'])->name('bbq');
    Route::get('/kk/kk', [KK::class, 'index'])->name('kk');
});*/
Route::prefix('brands')->group(function () {
    Route::get('/tpc/tpc', [TPC::class, 'index'])->name('tpc');
    Route::get('/tcc/tcc', [TCC::class, 'index'])->name('tcc');
    Route::get('/sw/sw', [SW::class, 'index'])->name('sw');
    Route::get('/dq/dq', [DQ::class, 'index'])->name('dq');
    Route::get('/bbq/bbq', [BBQ::class, 'index'])->name('bbq');
    Route::get('/kk/kk', [KK::class, 'index'])->name('kk');
});
Route::get('/users/setup',[Users::class, 'index'])->name('usr');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
