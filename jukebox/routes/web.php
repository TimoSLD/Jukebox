<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\GenresController;
use App\http\Controllers\SongsController;

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

Route::get('/genres', [App\Http\Controllers\GenresController::class, 'getAllGenres']);

Route::get('/songs', [App\Http\Controllers\songsController::class, 'getAllSongs']);

Auth::routes();

