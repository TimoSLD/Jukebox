@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-3" >
            <div class="card">
                <div class="card-body">
                    <?php $duration = 0;?>
                    <h2 class="card-title">Playlist name: {{$playlist->name}}</h3>
                    @foreach($songs as $song)
                        <div class="col-sm-12 mt-3" >
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Song: {{$song[0]->name}}</h5>
                                    <p class="card-text">artist: {{$song[0]->artist}}</p>
                                    <p class="card-text">length: {{$song[0]->length}}</p>
                                    <p class="hidetime" style="display: none">{{$duration += strtotime($song[0]->length)}}</p>
                                    <a href={{"delete/" .$song[0]->id . "/" . $playlist->id}} class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"> Delete out {{$playlist->name}} </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <h5 id="time"> Duration: {{date('H:i:s', $duration)}}</h5>
                </div>
    </div>
@endsection