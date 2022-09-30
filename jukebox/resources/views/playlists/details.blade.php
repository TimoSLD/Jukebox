@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       
            <div class="col-sm-12 mt-3" >
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Playlist name: {{$playlist->name}}</h5>

                @foreach($songs as $song)
            <div class="col-sm-12 mt-3" >
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Song: {{$song[0]->name}}</h5>
                <p class="card-text">artist: {{$song[0]->artist}}</p>

                {{-- <a href="{{ route('getSongById', [$song[0]->id])}}" class="btn btn-primary btn-sm">see info of {{$song[0]->name}}</a> --}}
                {{-- <a href={{"delete/" .$playlist->id}} class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"> Delete </a> --}}
                </div>
            </div>
            </div>
        @endforeach
    </div>
</div>
@endsection