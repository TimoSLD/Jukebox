<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\song;
use App\Models\Genre;

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

    public function getAllSongsWithGenre(){

        Product::orderBy('id','desc')->where('song_id', 'genre_id')->get();
    }

}

