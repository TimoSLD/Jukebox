@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($playlists as $playlist)
            <div class="col-sm-12 mt-3" >
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">playlist: {{$playlist->name}}</h5>
                <h5 class="card-title">user: {{$playlist->user_id}}</h5>
                
                
                </div>
            </div>
            </div>
        @endforeach
    </div>
</div>
@endsection