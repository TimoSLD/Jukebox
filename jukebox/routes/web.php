<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\GenresController;
use App\http\Controllers\SongsController;
use App\http\Controllers\PlaylistsController;

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
//this route to go to genres page after login.
Route::get('/home', [App\Http\Controllers\GenresController::class, 'getAllGenres']);
//this route to go to view all genres.
Route::get('/genres', [App\Http\Controllers\GenresController::class, 'getAllGenres']);
//this route to go to view all songs.
Route::get('/songs', [App\Http\Controllers\songsController::class, 'getAllSongs']);
//this route to go to view a specific song.
Route::get('songs/details/{id}', [App\Http\Controllers\songsController::class, 'getSongById'])->name('getSongById');
//this route to go to view songs with specific genre.
Route::get('genre/showbygenre/{id}', [App\Http\Controllers\songsController::class, 'getGenreSongs'])->name('getGenreSongs');
//this route to go to view all playlists.
Route::get('/playlists', [App\Http\Controllers\PlaylistsController::class, 'getAllplaylists']);
//this route to go to create playlist.
Route::get('/playlists/create', [App\Http\Controllers\PlaylistsController::class, 'create']);
Route::post('/playlists', [App\Http\Controllers\PlaylistsController::class, 'store']);

Route::post('/playlists', [App\Http\Controllers\PlaylistsController::class, 'edit']);

