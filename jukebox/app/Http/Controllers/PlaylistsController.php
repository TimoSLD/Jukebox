<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Playlist;
use App\Models\Song;
use app\Http\Controllers\SessionController;

use App\Models\Playlist_song;

class PlaylistsController extends Controller
{
    public function getAllPlaylists(){

        $playlists = Playlist::where('user_id', Auth::user()->id)->get();
        return view('playlists.index', ["playlists"=>$playlists]);
        
    }

    public function getAllPlaylistsWithSong_id($id){


        $playlists = Playlist::where('user_id', Auth::user()->id)->get();
        return view('playlists/playlist_song', ["playlists"=>$playlists], ["song_id"=>$id]);
        
    }

    public function getPlaylistById($id){
        $playlistSongs = Playlist_song::where('playlist_id', $id)->get();
        $songs = [];
        for ($i=0; $i < count($playlistSongs); $i++) { 
            $song = Song::where('id', $playlistSongs[$i]->song_id)->get();
            array_push($songs, $song);
        }
        return view('playlists.details')
        ->with('playlist', Playlist::where('id', $id)->first())
        ->with(["songs"=>$songs]);

    }
    
    public function storeSongToPlaylist($playlist_id, $song_id){
        
        playlist_song::create([
            'playlist_id' => $playlist_id,
            'song_id' => $song_id
           
        ]);
        return redirect('playlists/details/' . $playlist_id);
    }

    public function store(Request $request){
        $input = $request->all();
        $play = Playlist::create($input);

        $songs = session('song');
            foreach ($songs as $key => $song) {
                $song['id'];
                $play->songs()->attach($song['id']);
            } 
    
        return redirect('playlists')->with('flash_message', 'Playlist Addedd!');  
    }


    public function create()
    {
        return view('playlists.create');
    }

    public function queueToPlaylist()
    {
        return view('playlists.create');
        return $queue->queueToPlaylist();
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

   public function deletePlaylistWithSongs($id){
    $data = Playlist::find($id) ;
    $data->delete();
    $playlist_songs = Playlist_song::where('playlist_id', $id)->get();
    $playlist_songs->each->delete();
    return redirect('playlists');  
    }

public function deleteSongOutPlaylist($song_id, $playlist_id){
    $playlist_song = Playlist_song::where('song_id', $song_id)->get();
    $playlist_song->each->delete();
    return redirect('playlists/details/' . $playlist_id);  
 }



 
}
