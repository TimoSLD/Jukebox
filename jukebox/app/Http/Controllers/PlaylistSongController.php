<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Playlist_song;
use App\Models\Playlist;
use App\Models\Song;

class PlaylistSongController extends Controller
{
    public function getPlaylistsSongs(){
  
    }

    public function getAllPlaylists($id){

        $playlists = Playlist::where('user_id', Auth::user()->id)->get();
        return view('playlists/playlist_song', compact("playlists", "id"));
        
    }

}
