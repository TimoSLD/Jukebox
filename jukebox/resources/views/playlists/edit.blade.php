@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-header">playlist Page</div>
  <div class="card-body">
      
      <form action="{{ url('playlists/storePlaylist/' .$playlist->id) }}" method="post">
        {!! csrf_field() !!}
        <input type="hidden" name="id" id="id" value="{{$playlist->id}}" id="id" />
        <label>Playlist name</label></br>
        <input type="text" name="name" id="name" value="{{$playlist->name}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop