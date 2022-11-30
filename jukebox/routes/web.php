<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\GenresController;
use App\http\Controllers\SongsController;
use App\http\Controllers\PlaylistsController;
use App\http\Controllers\PlaylistSongController;

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
//this route to go to create playlist goes to controller, function create.
Route::get('/playlists/create', [App\Http\Controllers\PlaylistsController::class, 'create']);
//this route to go to store playlist goes to controller, function store.
Route::post('/playlists', [App\Http\Controllers\PlaylistsController::class, 'store']);
//this route to go to edit playlist goes to controller, function edit.
Route::get('playlists/edit/{id}', [App\Http\Controllers\PlaylistsController::class, 'edit']);
//this route to go to storePlaylist with the post data. goes to controller, function storePlaylist.
Route::post('playlists/storePlaylist/{id}', [App\Http\Controllers\PlaylistsController::class, 'storePlaylist']);
//this route to go to detail playlist, goes to controller, function getPlaylistById'.
Route::get('playlists/details/{id}', [App\Http\Controllers\PlaylistsController::class, 'getPlaylistById']);
//gets url delete/id, form here it goes to PlaylistsController, function delete.
Route::get('delete/{id}', [App\Http\Controllers\PlaylistsController::class, 'delete']);
//gets url playlists/details/{id}, form here it goes to PlaylistSongController, function getPlaylistsSongs.

Route::get('playlists/playlist_song/{id}', [App\Http\Controllers\PlaylistsController::class, 'getAllPlaylistsWithSong_id']);

Route::get('playlists/{playlist_id}/{song_id}', [App\Http\Controllers\PlaylistsController::class, 'storeSongToPlaylist']);

Route::get('delete/{id}', [App\Http\Controllers\PlaylistsController::class, 'deletePlaylistWithSongs']);

Route::get('playlists/details/delete/{song_id}/{playlist_id}', [App\Http\Controllers\PlaylistsController::class, 'deleteSongOutPlaylist']);

Route::get('queues/index/{id}', [App\Http\Controllers\PlaylistsController::class, 'add']);

Route::get('/queues/index', [App\Http\Controllers\songsController::class, 'getAllSongsQueue']);



