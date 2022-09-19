<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Playlist;

class PlaylistsController extends Controller
{
    public function getAllPlaylists(){

        $playlists = Playlist::where('user_id', Auth::user()->id)->get();
        return view('playlists.index', ["playlists"=>$playlists]);
        
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Playlist::create($input);
        return redirect('playlists')->with('flash_message', 'Playlist Addedd!');  
    }

    public function create()
    {
        return view('playlists.create');
    }

    public function edit($id)
    {
        $playlist = Playlist::find($id);
        return view('playlists.edit')->with('playlist', $playlist);
    }

    public function storePlaylist(Request $request, $id){
        $playlist = Playlist::find($id);
        $input = $request->all();
        $playlist->update($input);
        return redirect('playlists');  
    }

    public function update(Request $request, $id)
    {
        dd('hello world');
        $playlist = Playlist::find($id);
        $input = $request->all();
        $playlist->update($input);
        return redirect('playlists');  
    }

    public function destroy($id)
    {
        Playlist::destroy($id);
        return redirect('playlists');  
    }
}
