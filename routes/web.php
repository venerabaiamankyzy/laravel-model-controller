<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MovieController;

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

Route::get('/movie-list', [MovieController::class, 'movieList']) ->name('movie-list');

Route::get('/movie-detail', [MovieController::class, 'movieDetail']) ->name('movie-detail');