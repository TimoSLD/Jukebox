<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers\PlaylistController;
use App\Models\Song;
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
    //you can add all data you need like this etc...
    $song['name'] = $songFromDB->name;        
    $request->session()->push('song', array_merge((array)session()->get('song',[]), $song));    
    return redirect('queues/index');
}
}