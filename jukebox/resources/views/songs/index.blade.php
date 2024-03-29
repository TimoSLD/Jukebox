@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($songs as $song)
            <div class="col-sm-12 mt-3" >
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Song: {{$song->name}}</h5>
                <p class="card-text">artist: {{$song->artist}}</p>
                <p class="card-text">genre: {{$song->genre->name}}</p>
                <p class="card-text">length: {{$song->length}}</p>
                <a href="{{ route('getSongById', [$song->id])}}" class="btn btn-primary">see info of the song: {{$song->name}}</a>
                @auth
                <a href="{{ url('/playlists/playlist_song/' . $song->id ) }}" class="btn btn-success btn-sm"> add song to playlist </a>
                <a href="{{ url('/queues/index/' . $song->id ) }}" class="btn btn-success btn-sm"> add song to Queue </a>
                @endauth
                </div>
            </div>
            </div>
        @endforeach
    </div>
</div>
@endsection