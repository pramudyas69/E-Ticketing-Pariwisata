<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\DetailController;
use App\Models\Tiket;

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

Route::get('/informasi', [TiketController::class, 'index'])
->name('tikets.index');

Route::get('/', [TiketController::class, 'create'])
->name('tikets.create');

Route::post('/tikets/detail', [TiketController::class,'store'])
->name('tikets.store');
