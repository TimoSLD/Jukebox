@extends('layouts.app')
@section('content')
    
<div class="container">
    <div class="row">
        @foreach($genres as $genre)
            <div class="col-sm-2 mx-auto" >
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">{{$genre->name}}</h5>
                <a href="{{ route('getGenreSongs', [$genre->id])}}" class="btn btn-primary">see all {{$genre->name}} songs</a>
                </div>
            </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
