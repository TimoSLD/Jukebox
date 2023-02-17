<?php
namespace App;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Song;

class SessionManager{
    
    public function show()
    {    
        $songs = session('songs');
        
    }
    
    public function add(Request $request, $id)
    {
        $song = song::find($id);     
        $request->session()->push('song', $song);   
    }
    
    public function deleteSession(Request $request, $id){
    
        $songs = $request->session()->get('song'); // Get the array
        foreach($songs as $key => $song){
            if($song->id == $id){
                unset($songs[$key]);
    
                $request->session()->forget('song');
    
                foreach($songs as $song){
                    $request->session()->push('song', $song);
                }
                return redirect('queues/index');
            }
        }
    }
    
    public function emptyQueue(Request $request)
    {
        $songs = session()->pull('song', []);
        $request->session()->flush('song');
        return redirect('queues/index');
    }
}
?>