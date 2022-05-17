@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($songs as $song)
            <div class="col-sm-2 mx-auto" >
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">{{$song->name}}</h5>
                
                </div>
            </div>
            </div>
        @endforeach
    </div>
</div>
@endsection