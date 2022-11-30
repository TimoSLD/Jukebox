<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\song;


class SongsController extends Controller
{
    public function getAllSongs(){

        $songs = Song::All();
        return view('songs.index', ["songs"=>$songs]);
    }

    public function getSongById($id){

        return view('songs.details')
        ->with('song', Song::where('id', $id)->first());
    }

    public function getSongByGenreId($id){

        return view('songs.details')
        ->with('song', Song::where('id', $id)->first());
    }
    
    public function getGenreSongs($id)
{
    $songs = Song::where('genre_id', $id)->get();
        return view('genres.showbygenre', compact('songs'));
}       
    
public function getAllSongsQueue(Request $request){

    $song = Song::all();
    $value = app('App\Http\Controllers\SessionController')->sessionGetAll('playlists', $request);
    return view('/queues/index')->with(['value' => $value, 'song' => $song]);
}
}

