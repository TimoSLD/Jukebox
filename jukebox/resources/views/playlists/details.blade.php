@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       
            <div class="col-sm-12 mt-3" >
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Playlist name: {{$playlist->name}}</h5>
                </div>
            </div>
            </div>
    </div>
</div>
@endsection