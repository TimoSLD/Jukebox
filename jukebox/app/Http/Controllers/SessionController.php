<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SessionManager;
use App\Models\Song;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function show()
{    
    $queue = new SessionManager();
    $songs = $queue->show();
    return view('queues/index', compact('songs'));
}

public function add(Request $request, $id)
{
    $queue = new SessionManager();
    $songs = $queue->add($request, $id);
    return redirect('queues/index');
}

public function deleteSession(Request $request, $id)
{
    $queue = new SessionManager();
    $songs = $queue->deleteSession($request, $id);
    return redirect('queues/index');
}

public function emptyQueue(Request $request)
{
    $queue = new SessionManager();
    $songs = $queue->emptyQueue($request);
    return redirect('queues/index');
}
}