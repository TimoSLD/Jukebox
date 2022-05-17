<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\song;

class SongsController extends Controller
{
    public function getAllSongs(){

        $songs = Song::All();
        return view('songs', ["songs"=>$songs]);
    }
}

