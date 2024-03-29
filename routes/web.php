<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;


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

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/movie', [PageController::class, 'index'])->name('movie');
Route::get('/movieDetail/{id}', [PageController::class, 'movieDetail'])->name('movieDetail');