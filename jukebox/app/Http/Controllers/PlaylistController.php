<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\playlist;

class PlaylistController extends Controller
{
    public function getAllPlaylists(){

        $playlists = Playlist::All();
        return view('playlists.index', ["playlists"=>$playlists]);
    }
}
