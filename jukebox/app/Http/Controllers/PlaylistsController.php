<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Playlist;
use App\Models\Song;

use App\Models\Playlist_song;

class PlaylistsController extends Controller
{
    public function getAllPlaylists(){

        $playlists = Playlist::where('user_id', Auth::user()->id)->get();
        return view('playlists.index', ["playlists"=>$playlists]);
        
    }

    public function getAllPlaylistsWithSong_id($id){

        $playlists = Playlist::where('user_id', Auth::user()->id)->get();
        return view('playlists/playlist_song', compact("playlists", "id"));
        
    }

    public function getPlaylistById($id){
        $playlistSongs = Playlist_song::all();
        $songs = [];
        for ($i=0; $i < count($playlistSongs); $i++) { 
            $song = Song::where('id', $playlistSongs[$i]->id)->get();
            array_push($songs, $song);
        }
        return view('playlists.details')
        ->with('playlist', Playlist::where('id', $id)->first())
        ->with(["songs"=>$songs]);
        
    }

    public function storeSongToPlaylist($playlist_id, $song_id){
        playlist_song::create([
            'song_id' => $song_id,
            'playlist_id' => $playlist_id
        ]);
        return redirect('playlists/details/' . $playlist_id);
    }

    public function store(Request $request){
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

   public function delete($id){
        $data = Playlist::find($id);
        $data->delete();
        return redirect('playlists');  
   }
}
