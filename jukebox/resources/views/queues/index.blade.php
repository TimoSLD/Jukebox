@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <?php $duration = 0;?>
            @if(Session::has('song'))
                @foreach(Session::get('song') as $item)
                    <div class="card">
                        {{$item['id']}}
                        {{$item['name']}}
                        {{$item['length']}}
                        <p class="hidetime" style="display: none">{{$duration += strtotime($item->length)}}</p>
                        <a href={{"delete/" . $item['id']}} class="btn btn-danger btn-sm"> Delete  {{$item['name']}} out queue? </a>
                    </div>
                @endforeach
            @endif
           
                <h5 id="time"> Duration: {{date('H:i:s', $duration)}}</h5>
             <a href={{"delete/"}} class="btn btn-danger btn-sm"> Delete all out queue </a>
             <a href={{"playlists/playlist_song/"}} class="btn btn-success btn-sm"> create playlist of queue </a> 
             
        </div>
    </div>
@endsection