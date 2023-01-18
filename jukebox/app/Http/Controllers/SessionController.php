<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers\PlaylistController;
use App\Models\Song;
use Illuminate\Support\Facades\Session;
//manages all session data
class SessionController extends Controller
{


    public function show()
{    
    $songs = session('songs');
    return view('queues/index', compact('songs'));
}



public function add(Request $request, $id)
{
    $songFromDB = song::find($id);
    $song = [];
    $song['id'] = $id;
    //you can add all data you need like this
    $song['name'] = $songFromDB->name;        
    $request->session()->push('song', array_merge((array)session()->get('song',[]), $song));    
    return redirect('queues/index');
}

public function deleteSession(Request $request, $id){
    $songs = session()->pull('song', []); // Second argument is a default value
    if(($key = array_search($id, $songs)) !== false) {
        unset($songs[$key]);
    }
    session()->put('songs', $songs);
    // $request->session()->forget("id");
    return redirect('queues/index');
}

// public function emptyQueue(Request $request)
// {
//     $songs = session()->pull('song', []);
//     $request->session()->flush('song');
//     return redirect('queues/index');
// }
}